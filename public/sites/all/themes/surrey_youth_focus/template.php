<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */
 <?php
function mytheme_theme(&$existing, $type, $theme, $path) {
  $hooks['user_login'] = array(
    'template' => 'templates/user_login',
    'render element' => 'form',
    // other theme registration code...
  );
  return $hooks;
}
function mytheme_preprocess_user_login(&$variables) {
  $variables['intro_text'] = t('This is my awesome login form');
  $variables['rendered'] = drupal_render_children($variables['form']);
}
?>