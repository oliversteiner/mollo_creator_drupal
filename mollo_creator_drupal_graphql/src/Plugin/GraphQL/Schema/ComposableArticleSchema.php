<?php

namespace Drupal\mollo_creator_drupal_graphql\Plugin\GraphQL\Schema;

use Drupal\graphql\Plugin\GraphQL\Schema\ComposableSchema;

/**
 * @Schema(
 *   id = "article_composable",
 *   name = "Composable Mollo Creator schema",
 *   extensions = "composable",
 * )
 */
class ComposableArticleSchema extends ComposableSchema {

}
