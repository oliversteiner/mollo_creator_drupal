<?php

namespace Drupal\mollo_creator_graphql\Plugin\GraphQL\DataProducer;

use Drupal\Core\Cache\RefinableCacheableDependencyInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\graphql\Plugin\GraphQL\DataProducer\DataProducerPluginBase;
use Drupal\mollo_creator_graphql\Plugin\GraphQL\Response\MolloInfoResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * @DataProducer(
 *   id = "get_mollo_info",
 *   name = @Translation("Mollo Info"),
 *   description = @Translation("Shows basic info for Mollo."),
 *   produces = @ContextDefinition("any",
 *     version = @Translation("Version Number of Mollo")
 *   ),
 * )
 */
class MolloInfo extends DataProducerPluginBase implements ContainerFactoryPluginInterface {

  private const VERSION = 'MolloInfo Version 2';

  /**
   * @var \Drupal\Core\Session\AccountInterface
   */
  private $currentUser;

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->get('current_user')
    );
  }

  /**
   * Mollo constructor.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param array $plugin_definition
   *   The plugin implementation definition.
   * @param \Drupal\Core\Session\AccountInterface $current_user
   *   The current user.
   */
  public function __construct(array $configuration, string $plugin_id, array $plugin_definition, AccountInterface $current_user) {
    parent::__construct($configuration, $plugin_id, $plugin_definition);
    $this->currentUser = $current_user;
  }

  /**
   * Creates an mollo_news.
   *
   *   The submitted values for the mollo_news.
   *
   *   The newly created mollo_news.
   *
   * @throws \Exception
   */
  public function resolve(): MolloInfoResponse {
    $response = new MolloInfoResponse();
    if ($this->currentUser->hasPermission("create article content")) {

      $response->setMolloInfo();
    }
    else {
      $response->addViolation(
        $this->t('You do not have permissions to be here.')
      );
    }
    return $response;
  }


}
