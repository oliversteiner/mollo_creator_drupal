<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\SchemaExtension;

use Drupal\graphql\GraphQL\ResolverBuilder;
use Drupal\graphql\GraphQL\ResolverRegistry;
use Drupal\graphql\GraphQL\ResolverRegistryInterface;
use Drupal\graphql\GraphQL\Response\ResponseInterface;
use Drupal\graphql\Plugin\GraphQL\SchemaExtension\SdlSchemaExtensionPluginBase;
use Drupal\graphql_composable\GraphQL\Response\ArticleResponse;
use Drupal\graphql_examples\Wrappers\QueryConnection;
use Drupal\mollo_blog_graphql\Plugin\GraphQL\Response\MolloBlogResponse;
use Drupal\mollo_creator_graphql\Plugin\GraphQL\Response\MolloInfoResponse;
use Exception;

/**
 * @SchemaExtension(
 *   id = "mollo_extension",
 *   name = "Mollo  Extension",
 *   description = "Mollo Extension",
 *   schema = "mollo"
 * )
 */
class MolloCreatorExtension extends SdlSchemaExtensionPluginBase {


  /**
   * {@inheritdoc}
   */
  public function registerResolvers(ResolverRegistryInterface $registry) {
    $builder = new ResolverBuilder();

    $registry->addFieldResolver('MolloInfo', 'version',
      $builder->callback(function () {
        return '1.0.1';
      })
    );
    $registry->addFieldResolver('MolloInfo', 'description',
      $builder->callback(function () {
        return 'Base GraphQL for Mollo Modules';
      })
    );

    // Query - mollo info 4
    $registry->addFieldResolver('Query', 'mollo',
      $builder->callback(function () {
        return '';
      }));
  }

  /**
   * @param string $type
   * @param \Drupal\graphql\GraphQL\ResolverRegistry $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addConnectionFields(string $type, ResolverRegistry $registry, ResolverBuilder $builder) {
    $registry->addFieldResolver($type, 'total',
      $builder->callback(function (QueryConnection $connection) {
        return $connection->total();
      })
    );

    $registry->addFieldResolver($type, 'items',
      $builder->callback(function (QueryConnection $connection) {
        return $connection->items();
      })
    );
  }


  /**
   * Resolves the response type.
   *
   * @param \Drupal\graphql\GraphQL\Response\ResponseInterface $response
   *   Response object.
   *
   * @return string
   *   Response type.
   *
   * @throws \Exception
   *   Invalid response type.
   */
  public static function resolveResponse(ResponseInterface $response): string {
    // Resolve content response.
    if ($response instanceof MolloInfoResponse) {
      return 'MolloResponse';
    }
    throw new \Exception('Invalid response type.');
  }

}

