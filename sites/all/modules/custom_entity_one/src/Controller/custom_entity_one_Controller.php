<?php
namespace Drupal\custom_entity_one\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

class custom_entity_one_Controller extends ControllerBase {
  
  protected $BikesService;

  public function __construct($BikesService) {
    $this->BikesService = $BikesService;
  }
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('custom_entity_one.bikes_service')
    );
  }
  public function content() {
    return array(
      '#theme' => 'bikes',
      '#Bikes_value' => $this->BikesService->getBikesValue()
    );
  }

}