<?php
defined('_JEXEC') or die ("Restricted access");

JFactory::getDocument()->addStyleSheet('modules' . DIRECTORY_SEPARATOR . 'mod_big_image' . DIRECTORY_SEPARATOR . 'css' . DIRECTORY_SEPARATOR . 'mod_big_image.css');

$height = $params->get('height', '100vh');
$font = $params->get('font', 'Arial, sans-serif');
$font_color = $params->get('font_color', '#000000');
$font_size = $params->get('font_size', '50px');

if (is_numeric($height)) {
    $height .= "px";
}

if (is_numeric($font_size)) {
    $font_size .= "px";
}

JFactory::getDocument()->addStyleDeclaration("
.mod_big_image {height: " . $height . "}
.mod_big_image .big_image_content {
    font-family: " . $font . ";
    color: " . $font_color . ";
    font-size: " . $font_size . ";
}
");

require(JModuleHelper::getLayoutPath('mod_big_image', 'default'));