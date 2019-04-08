<?php
namespace Drupal\custom_entity_one;

use Drupal\Core\Entity\EntityTypeManagerInterface;

class BikesService {

  protected $Bikes_value;
  protected $entityTypeManager;

  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  public function getBikesValue() {    
    $query = $this->entityTypeManager->getStorage('node')->getQuery();
    $query->condition('status', 1)->condition('type', 'bike_brand');
    $nids = $query->execute();
    $nodes = entity_load_multiple('node', $nids);          
    foreach ($nodes as $node) {
      $Bikes = $this->entityTypeManager->getViewBuilder('node')->view($node);
      $Bikes_value[] = render($Bikes);
    }
    //var_dump($Bikes_value);
    return $Bikes_value;
  }
  
}