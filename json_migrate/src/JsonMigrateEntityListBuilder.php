<?php

namespace Drupal\json_migrate;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Json migrate entity entities.
 *
 * @ingroup json_migrate
 */
class JsonMigrateEntityListBuilder extends EntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Json migrate entity ID');
    $header['name'] = $this->t('Name');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var \Drupal\json_migrate\Entity\JsonMigrateEntity $entity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.json_migrate_entity.edit_form',
      ['json_migrate_entity' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
