<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\Wrapper;

use Drupal\Core\Entity\Query\QueryInterface;
use GraphQL\Deferred;

class QueryConnection {

  /**
   * @var \Drupal\Core\Entity\Query\QueryInterface
   */
  protected $query;

  /**
   * QueryConnection constructor.
   *
   * @param \Drupal\Core\Entity\Query\QueryInterface $query
   */
  public function __construct(QueryInterface $query) {
    $this->query = $query;
  }



  public function version() {
    return 'Version via Connection';
  }

  public function description() {
    return 'Description via Connection';
  }

}
