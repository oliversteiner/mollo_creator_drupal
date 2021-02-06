<?php

namespace Drupal\mollo_creator_drupal\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'twig_template_block' block.
 *
 * @Block(
 *  id = "mollo_creator_drupal_twig_template_block",
 *  admin_label = @Translation("Twig Template Block"),
 *   category = @Translation("Mollo"),
 * )
 */
class TwigTemplateBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {

    $variables = $this->getVars();

    $build = [];
    $block = [
      '#theme' => 'twig_template_block',
      '#attached' => [
        'library' => ['mollo_creator_drupal/block'],
      ],
      '#attributes' => [
        'class' => ['mollo-creator-drupal'],
        'id' => 'twig-template-block',
      ],
      '#mollo_block' => $variables,
      '#cache' => [
        'max-age' => 0,
      ],
    ];

    $build['twig_template_block'] = $block;
    return $build;


  }

  public function getVars() {

    // for Twig Variables Suggestion define Vars in MolloCreatorDrupalController:
    // and include
    // {# @var mollo_creator_drupal \Drupal\mollo_creator_drupal\Controller\MolloCreatorDrupalController #}
    // at top of your twig Template

    $variables['foo'] = 'foo - Block:Twig';
    $variables['bar'] = 'bar - Block:Twig';
    $variables['test'] = TRUE;

    return $variables;
  }

}
