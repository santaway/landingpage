<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function phptemplate_menu_item_link($item, $link_item) {
  // Convert anchors in path to proper fragment
  $path = explode('#', $link_item['path'], 2);
  $fragment = !empty($path[1]) ? $path[1] : NULL;
  $path = $path[0];
  return l(
            $item['title'],
            $path,
            !empty($item['description']) ? array('title' => $item['description']) : array(),
            !empty($item['query']) ? $item['query'] : NULL,
            $fragment,
            FALSE,
            FALSE
          );
}

function swedishschoolofbusiness_theme() {
  $hooks['login'] = array(
    'template' => 'templates/page-login',
    'render element' => 'form',
    // other theme registration code...
  );
  return $hooks;
}

function swedishschoolofbusiness_preprocess_user_login(&$vars) {
		$vars['intro_text'] = t('This is my awesome login form');
		$variables['rendered'] = drupal_render_children($variables['form']);
} ?>