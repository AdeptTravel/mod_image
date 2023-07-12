<?php

/**
 * Image Module
 *
 * @author      Brandon J. Yaniz (joomla@adept.travel)
 * @copyright   2021-2022 The Adept Traveler, Inc., All Rights Reserved.
 * @license     BSD 2-Clause; See LICENSE.txt
 */

defined('_JEXEC') or die;

if (!empty($params->get('container', 0))) {
  echo '<' . $params->get('container_tag');

  if (!empty($params->get('container_css'))) {
    echo ' class="' . $params->get('container_css') . '"';
  }

  echo '>';
}

if ($params->get('link_type', 0)) {
  echo '<a href="';

  // Custom link type
  if ($params->get('link_type') == 'custom') {
    echo $params->get('link_custom');
  }

  // Link to Menu Item
  else if ($params->get('link_type') == 'menuitem') {
    echo $params->get('link_menu_item');
  }

  echo '"';

  // Link Title
  if (!empty($params->get('link_title'))) {
    echo ' title="' . $params->get('link_title') . '"';
  }

  // Link CSS
  if (!empty($params->get('link_css'))) {
    echo ' class="' . $params->get('link_css') . '"';
  }

  // Link Target`
  if ($params->get('link_target', 0)) {
    echo ' target="_blank"';
  }

  // Link Rel tag
  if (!empty($params->get('link_rel'))) {
    echo ' rel="' . $params->get('link_rel') . '"';
  }

  echo '>';
}

echo '<img';
echo ' src="' . $params->get('image_src') . '"';

if ($params->get('lazyload', 0)) {
  echo ' loading="lazy"';
}

if (!empty($params->get('image_css'))) {
  echo ' style="' . $params->get('image_css') . '"';
}

if (!empty($params->get('image_alt'))) {
  echo ' alt="' . $params->get('image_alt') . '"';
}

echo '>';

if (!empty($params->get('text_heading', ''))) {
  echo '<' . $params->get('text_heading_tag', 'h3') . '>';
  echo $params->get('text_heading');
  echo '</' . $params->get('text_heading_tag', 'h3') . '>';
}

if (!empty($params->get('text_subheading', ''))) {
  echo '<' . $params->get('text_subheading_tag', 'h4') . '>';
  echo $params->get('text_subheading');
  echo '</' . $params->get('text_subheading_tag', 'h4') . '>';
}

if (!empty($params->get('text_content', ''))) {
  echo '<div class="content">';
  echo $params->get('text_content');
  echo '</div>';
}

if (!empty($params->get('link_text', ''))) {
  echo '<p class="readmore">';
  echo $params->get('link_text');
  echo '</p>';
}

//if (!empty($params->get('link_type') != 'none'))
if ($params->get('link_type', 'none') != 'none') {
  echo "</a>";
}

if (!empty($params->get('container', 0))) {
  echo '</' . $params->get('container_tag') . '>';
}
