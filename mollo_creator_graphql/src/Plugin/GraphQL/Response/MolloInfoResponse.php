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
   *
   * @param $data
   *
   * @return array
   */
  public function setMolloInfo($data): array {
    $this->mollo_info = $data;
    return $this->getMolloInfo();
  }

  /**
   * Gets the mollo_creator to be served.
   *
   *   The mollo_creator to be served.
   */
  public function getMolloInfo(): array {
    return $this->mollo_info;
  }


}
