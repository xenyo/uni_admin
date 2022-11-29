<?php

use Drupal\Core\Render\Element;

/**
 * Implements hook_form_alter().
 */
function uni_admin_form_alter(&$form, $form_state, $form_id) {
  /**
   * Layout paragraphs component form
   */
  if ($form_id === 'layout_paragraphs_component_form') {
    $form['#attached']['library'][] = 'uni_admin/layout-paragraphs-component-form';
  }
}
