<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\Schema;

use Drupal\graphql\GraphQL\ResolverBuilder;
use Drupal\graphql\GraphQL\ResolverRegistry;
use Drupal\graphql\Plugin\GraphQL\Schema\SdlSchemaPluginBase;
use Drupal\mollo_creator_graphql\Plugin\GraphQL\Wrapper\QueryConnection;

/**
 * @Schema(
 *   id = "mollo",
 *   name = "Mollo Base",
 * )
 */
class MolloCreatorSchema extends SdlSchemaPluginBase {

  /**
   * {@inheritdoc}
   */
  public function getResolverRegistry() {
    $builder = new ResolverBuilder();
    $registry = new ResolverRegistry();

    $this->addQueryFields($registry, $builder);
    $this->addMolloCreatorFields($registry, $builder);

    // Re-usable connection type fields.
    $this->addConnectionFields('ArticleConnection', $registry, $builder);

    return $registry;
  }


  /**
   * @param \Drupal\graphql\GraphQL\ResolverRegistry $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addMolloCreatorFields(ResolverRegistry $registry, ResolverBuilder $builder) {

    $registry->addFieldResolver('MolloInfo', 'version2',
      $builder->callback(function () {
        return '1.0.0';
      })
    );
    $registry->addFieldResolver('MolloInfo', 'description2',
      $builder->callback(function () {
        return 'Base GraphQL for Mollo Modules';
      })
    );
  }

  /**
   * @param \Drupal\graphql\GraphQL\ResolverRegistry $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addQueryFields(ResolverRegistry $registry, ResolverBuilder $builder): void {
    $registry->addFieldResolver('Query', 'mollo_info_4',
      $builder->produce('get_mollo_info')
        ->map('version', $builder->fromArgument('version'))
        ->map('description', $builder->fromArgument('description'))
    );

    $registry->addFieldResolver('Query', 'mollo_info_5',
      $builder->produce('get_mollo_info')
        ->map('version', $builder->fromArgument('version'))
        ->map('description', $builder->fromArgument('description'))
    );

  }
  /**
   * @param string $type
   * @param \Drupal\graphql\GraphQL\ResolverRegistry $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addConnectionFields(string $type, ResolverRegistry $registry, ResolverBuilder $builder) {
    $registry->addFieldResolver($type, 'version5',
      $builder->callback(function (QueryConnection $connection) {
        return $connection->version();
      })
    );

    $registry->addFieldResolver($type, 'description5',
      $builder->callback(function (QueryConnection $connection) {
        return $connection->description();
      })
    );
  }
}
