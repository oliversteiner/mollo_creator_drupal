<?php

namespace Drupal\mollo_creator_drupal\Utils;

/**
 *
 */
trait MolloCreatorDrupalTrait {

  /**
   * Name of our module.
   *
   * @return string
   *   A module name
   */
  protected function getModuleName(): string {
    return 'mollo_creator_drupal';
  }

  /**
   * Get full path to the template.
   *
   * @return string
   *   Path string
   */
  protected function getTemplatePath(): string {
    return drupal_get_path('module', $this->getModuleName()) .
      '/templates/';
  }

}
