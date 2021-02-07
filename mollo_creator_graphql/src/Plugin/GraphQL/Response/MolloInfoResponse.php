<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\Response;

use Drupal\Core\Entity\EntityInterface;
use Drupal\graphql\GraphQL\Response\Response;

/**
 * Type of response used when an mollo_info is returned.
 */
class MolloInfoResponse extends Response {

  /**
   * The mollo_creator to be served.
   *
   */
  protected $mollo_info;

  /**
   * Sets the content.
   *
   *   The mollo_creator to be served.
   */
  public function setMolloInfo(): void {
    $this->mollo_info = 'Info';
  }

  /**
   * Gets the mollo_creator to be served.
   *
   *   The mollo_creator to be served.
   */
  public function mollo_info():string {
    return $this->mollo_info;
  }


}
