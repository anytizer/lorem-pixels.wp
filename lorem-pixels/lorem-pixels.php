<?php
/**
 * Plugin Name: Lorem Pixels | Randoms
 * Description: API based lorem lipsum styled random text and image generator to quickly build dummy contents. Use shortcode: <code>[lorem]</code> for a random text. Text is served as <a href="https://github.com/bimalpoudel/micro-services/tree/master/micro-services/lorem">micro service</a> from <a href="http://bimal.org.np/micro-services/lorem/lorem.php">http://bimal.org.np/micro-services/lorem/lorem.php</a>. Use shortcode <code>[pixel width="200" height="100"]</code> for a random image. Images are served using <a href="http://placehold.it/">PlaceHold.it</a> and/or other public image hosting services.
 * Plugin URI: http://bimal.org.np/
 * Author: Bimal Poudel
 * Author URI: http://bimal.org.np/
 * Version: 1.0.0
 * License: GPL3
 */

require_once('classes/class.lorem_pixels.inc.php');

$lorem_pixels = new lorem_pixels();
$lorem_pixels->init(basename(dirname(__FILE__)).'/'.basename(__FILE__));
