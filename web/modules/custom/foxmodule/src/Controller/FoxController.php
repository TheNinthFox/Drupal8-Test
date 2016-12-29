<?php

namespace Drupal\foxmodule\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Console\Bootstrap\DrupalKernel;

/**
 * Class FoxController.
 *
 * @package Drupal\foxmodule\Controller
 */
class FoxController extends ControllerBase {

  /**
   * Drupal\Console\Bootstrap\DrupalKernel definition.
   *
   * @var \Drupal\Console\Bootstrap\DrupalKernel
   */
  protected $kernel;

  /**
   * {@inheritdoc}
   */
  public function __construct() {
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
    );
  }

  /**
   * Fox.
   *
   * @return string
   *   Return Hello string.
   */
  public function fox($name) {
    return [
      '#type' => 'markup',
      '#markup' => $this->t('Implement method: Fox with parameter(s): $name'),
    ];
  }

}
