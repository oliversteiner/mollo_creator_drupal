<?php

namespace Drupal\mollo_creator_drupal\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\mollo_creator_drupal\Utils\MolloCreatorDrupalTrait;


/**
 * Class MolloCreatorDrupalController.
 *
 *

 */
class MolloCreatorDrupalController extends ControllerBase {

  use MolloCreatorDrupalTrait;

  // public  Vars for Twig Var Suggestion. Use in Template via:
  // {# @var mollo_creator_drupal \Drupal\mollo_creator_drupal\Controller\MolloCreatorDrupalController #}

  public $test;

  public $foo;

  public $bar;




  /**
   * @return array[]
   */
  public function page(): array {

    $template_name = 'mollo-creator-drupal-page.html.twig';
    $template_file = $this->getTemplatePath() . $template_name;
    $template = file_get_contents($template_file);


    return [
      'description' => [
        '#type' => 'inline_template',
        '#template' => $template,
        '#context' => $this->getPageVars(),
      ],
    ];
  }


  /**
   * @return array
   *
   */
  private function getPageVars(): array {

    $test = TRUE;
    $foo = 'Foo - Page';
    $bar = 'Bar - Page';

    $variables['mollo_page']['test'] = $test;
    $variables['mollo_page']['foo'] = $foo;
    $variables['mollo_page']['bar'] = $bar;

    return $variables;
  }

}
