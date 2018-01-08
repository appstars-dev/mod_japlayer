﻿<?php
# @version		$version 0.1 Amvis United Company Limited  $
# @copyright	Copyright (C) 2017 AUnited Co Ltd. All rights reserved.
# @license		GNU/GPL, see LICENSE.php
# Updated		5th January 2017
#
# Site: http://aunited.ru
# Email: info@aunited.ru
# Phone: null
#
# Joomla! is free software. This version may have been modified pursuant
# to the GNU General Public License, and as distributed it includes or
# is derivative of works licensed under the GNU General Public License or
# other free or open source software licenses.
# See COPYRIGHT.php for copyright notices and details.

// no direct access
defined('_JEXEC') or die ('Restricted Access');
$exit = "No Player";

/**
 * @param $color
 * @param $case
 * @return string
 */
function modjaplayer(&$subject, $config)
{
    parent::__construct($subject, $config);
    $this->_plugin = JPluginHelper::getModule( 'system', 'livetex' );
    $this->_params = new JParameter( $this->_plugin->params );
}
$options['title']="";
$options['description']="";
$options['stream']=;
$narrow=""; //Optional narrow style
$pic=""; // Optional, music picture
$color="";
$width="";
function StreamPlayer($options)
{
    
return '<div style="width:'.$options['width'].'; background:'.$options['color'].'; text-align:center;" id="aplayer1" class="aplayer">
<script src="APlayer.min.js"></script>
<script>
var ap = new APlayer({
    element: document.getElementById(\'aplayer1\'),
    narrow: false,
    autoplay: false,
    music: {
        title: \''.$options['title'].' \',
        author: \''.$options['description'].' \',
        url: \''.$options['stream'].' \',
        pic: \'http://7xifn9.com1.z0.glb.clouddn.com/Preparation.jpg\',  // Optional, music picture
    }
});
</script></div>';}
echo $exit;

?>
