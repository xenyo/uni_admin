<?php

use Drupal\Core\Template\AttributeHelper;

function uni_admin_preprocess_paragraph(&$variables) {
  $variables['attributes'] = AttributeHelper::mergeCollections(
    $variables['attributes'] ?? [],
    [ 'class' => $variables['suggestions'] ],
  );
  $variables['attributes']['class'][] = 'clearfix';
}
