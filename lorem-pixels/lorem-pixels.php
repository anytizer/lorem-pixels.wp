<?php
/**
 * Plugin Name: Lorem Pixels
 * Version: 1.0
 * Plugin URI: http://bimal.org.np/
 * Description: API based lorem lipsum styled random text and image generator. Use shortcodes: <code>[lorem]</code>, <code>[image width="200" height="100"]</code>. Images served using <a href="http://unsplash.com/">Unsplash API</a>.
 * Author: Bimal Poudel
 * Author URI: http://bimal.org.np/
 * License: GPL3
 */

require_once('classes/class.lorempixels.inc.php');

$lorempixels = new lorempixels();
$lorempixels->init(basename(dirname(__FILE__)).'/'.basename(__FILE__));
