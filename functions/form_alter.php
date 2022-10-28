<?php

/**
 * Implements hook_form_alter().
 */
function uni_admin_form_alter(&$form, $form_state, $form_id) {
  switch ($form_id) {
    case 'layout_paragraphs_component_form':
      $form['#attached']['library'][] = 'uni_admin/layout-paragraphs-component-form';
      break;

    case 'node_page_form':
    case 'node_page_edit_form':
      $form['#attached']['library'][] = 'uni_admin/node-page-form';
      break;
  }
}
