<?php

namespace Drupal\json_migrate\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\Core\Entity\EntityPublishedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Json migrate entity entities.
 *
 * @ingroup json_migrate
 */
interface JsonMigrateEntityInterface extends ContentEntityInterface, EntityChangedInterface, EntityPublishedInterface, EntityOwnerInterface {

  /**
   * Add get/set methods for your configuration properties here.
   */

  /**
   * Gets the Json migrate entity name.
   *
   * @return string
   *   Name of the Json migrate entity.
   */
  public function getName();

  /**
   * Sets the Json migrate entity name.
   *
   * @param string $name
   *   The Json migrate entity name.
   *
   * @return \Drupal\json_migrate\Entity\JsonMigrateEntityInterface
   *   The called Json migrate entity entity.
   */
  public function setName($name);

  /**
   * Gets the Json migrate entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Json migrate entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Json migrate entity creation timestamp.
   *
   * @param int $timestamp
   *   The Json migrate entity creation timestamp.
   *
   * @return \Drupal\json_migrate\Entity\JsonMigrateEntityInterface
   *   The called Json migrate entity entity.
   */
  public function setCreatedTime($timestamp);

}
