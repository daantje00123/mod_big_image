<?php
defined("_JEXEC") or die("Restricted access"); ?>

<div class="mod_big_image">
    <div class="big_image" style="background-image: url('<?php echo JUri::base() . $params->get('image'); ?>');">
        <div class="big_image_content"><?php echo $params->get('content'); ?></div>
    </div>
</div>
