<?php

namespace Drupal\json_migrate\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Json migrate entity entities.
 */
class JsonMigrateEntityViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
    return $data;
  }

}
