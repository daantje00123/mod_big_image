<?php
defined('_JEXEC') or die ("Restricted access");

JFactory::getDocument()->addStyleSheet('modules' . DIRECTORY_SEPARATOR . 'mod_big_image' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'mod_big_image.css');

// Get params
$height = $params->get('height', '100vh');
$font = $params->get('font', 'Arial, sans-serif');
$font_color = $params->get('font_color', '#000000');
$font_size = $params->get('font_size', '50px');
$module_id = $module->id;

// If the height is numeric, make it pixels
if (is_numeric($height)) {
    $height .= "px";
}

// If the font size is numeric, make it points
if (is_numeric($font_size)) {
    $font_size .= "pt";
}

// Add style for this module to the head
JFactory::getDocument()->addStyleDeclaration("
#mod_big_image_" . $module_id . " {height: " . $height . "}
#mod_big_image_" . $module_id . " .big_image_content {
    font-family: " . $font . ";
    color: " . $font_color . ";
    font-size: " . $font_size . ";
}
");

// Load layout
require(JModuleHelper::getLayoutPath('mod_big_image', 'default'));