<?php

/**
 * @file
 * Contains json_migrate_entity.page.inc.
 *
 * Page callback for Json migrate entity entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Json migrate entity templates.
 *
 * Default template: json_migrate_entity.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_json_migrate_entity(array &$variables) {
  // Fetch JsonMigrateEntity Entity Object.
  $json_migrate_entity = $variables['elements']['#json_migrate_entity'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
