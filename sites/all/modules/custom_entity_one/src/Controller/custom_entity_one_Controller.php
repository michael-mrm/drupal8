<?php
namespace Drupal\custom_entity_one\Controller;
class custom_entity_one_Controller {
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('this is custom_entity_one'),
    );
  }
}