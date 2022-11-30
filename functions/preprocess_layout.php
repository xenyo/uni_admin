<?php

use Drupal\Core\Template\AttributeHelper;

function uni_admin_preprocess_layout(&$variables) {
  $variables['attributes'] = AttributeHelper::mergeCollections(
    $variables['attributes'] ?? [],
    [ 'class' => $variables['suggestions'] ],
  );
}
