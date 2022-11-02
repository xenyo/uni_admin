<?php

use Drupal\Core\Render\Element;

/**
 * Implements hook_form_alter().
 */
function uni_admin_form_alter(&$form, $form_state, $form_id) {
  /**
   * Uni page form
   */
  if ($form_id === 'node_uni_page_form' || $form_id === 'node_uni_page_edit_form') {
    $form['#attached']['library'][] = 'uni_admin/node-uni-page-form';
  }

  /**
   * Layout paragraphs component form
   */
  if ($form_id === 'layout_paragraphs_component_form') {
    // Attach libraries
    $form['#attached']['library'][] = 'uni_admin/layout-paragraphs-component-form';

    // Modify select empty option labels
    foreach (Element::children($form) as $key) {
      if (isset($form[$key]['widget'][0]['select'])) {
        $form[$key]['widget'][0]['select']['#empty_option'] = t('- Auto -');
      }
    }

    // Add form states
    $form["uni_wrapper_width"]['#states'] = [
      'invisible' => [
        ":input[name='uni_wrapper_disable[value]']" => [
          'checked' => true,
        ],
      ],
    ];
  }
}
