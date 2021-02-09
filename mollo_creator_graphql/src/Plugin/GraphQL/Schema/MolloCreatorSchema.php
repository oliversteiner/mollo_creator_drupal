<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\Schema;

use Drupal\graphql\Plugin\GraphQL\Schema\ComposableSchema;

/**
 * @Schema(
 *   id = "mollo",
 *   name = "Mollo Base Schema",
 *   extensions = "mollo",
 * )
 */
class MolloCreatorSchema extends ComposableSchema {



}
