<?php

/**
 * Image Module
 *
 * @author      Brandon J. Yaniz (joomla@adept.travel)
 * @copyright   2021-2022 The Adept Traveler, Inc., All Rights Reserved.
 * @license     BSD 2-Clause; See LICENSE.txt
 */

defined('_JEXEC') or die;

if (!empty($params->get('image_src'))) {
  require JModuleHelper::getLayoutPath('mod_image', $params->get('layout', 'default'));
}
