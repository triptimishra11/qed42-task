<?php

namespace Drupal\json_migrate;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Json migrate entity entity.
 *
 * @see \Drupal\json_migrate\Entity\JsonMigrateEntity.
 */
class JsonMigrateEntityAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\json_migrate\Entity\JsonMigrateEntityInterface $entity */

    switch ($operation) {

      case 'view':

        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished json migrate entity entities');
        }


        return AccessResult::allowedIfHasPermission($account, 'view published json migrate entity entities');

      case 'update':

        return AccessResult::allowedIfHasPermission($account, 'edit json migrate entity entities');

      case 'delete':

        return AccessResult::allowedIfHasPermission($account, 'delete json migrate entity entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add json migrate entity entities');
  }


}
