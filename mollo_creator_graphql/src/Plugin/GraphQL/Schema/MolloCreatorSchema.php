<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\Schema;

use Drupal\graphql\GraphQL\ResolverBuilder;
use Drupal\graphql\GraphQL\ResolverRegistry;
use Drupal\graphql\Plugin\GraphQL\Schema\SdlSchemaPluginBase;
use Drupal\mollo_creator_graphql\Plugin\GraphQL\Wrapper\MolloConnection;

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


    return $registry;
  }


  /**
   * @param \Drupal\graphql\GraphQL\ResolverRegistry $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addMolloCreatorFields(ResolverRegistry $registry, ResolverBuilder $builder) {

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

  }

  /**
   * @param \Drupal\graphql\GraphQL\ResolverRegistry $registry
   * @param \Drupal\graphql\GraphQL\ResolverBuilder $builder
   */
  protected function addQueryFields(ResolverRegistry $registry, ResolverBuilder $builder): void {

    // Query - mollo info 4
    $registry->addFieldResolver('Query', 'mollo',
      $builder->callback(function () {
        return '';
      }));


  }

}
