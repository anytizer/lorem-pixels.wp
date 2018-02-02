=== Lorem Pixels ===

Contributors: pbimal
Donate link: http://bimal.org.np/
Tags: lorem, pixels, random, dummy, generator
Requires at least: 4.5.0
Tested up to: 4.9.2
Stable tag: 1.0.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html


API based lorem lipsum styled random text and image generator.


== Description ==

Allows you to insert a snippet to randomly generate text and images at runtime.

This is a development purpose plugin. It helps you to quickly build text and images for your website. Until you come up with a final text that is suitable for your website, you can use the available shortcodes for your dummy text and image.


= Random Text =

Use shortcode: <code>[lorem]</code> for random text.
The text is served as [micro-service api](https://github.com/bimalpoudel/micro-services/tree/master/micro-services/lorem) hosted at <a href="http://bimal.org.np/micro-services/lorem/lorem.php">http://bimal.org.np/micro-services/lorem/lorem.php</a>.


= Random Image =

Use shortcode <code>[pixel width="200" height="100"]</code> for random images.
Images are served using <a href="http://placehold.it/">PlaceHold.it</a> and/or other public image hosting services.


== Installation ==


= Method #1 =

 * Go to your WP Admin > Plugins > Add New page.
 * Search for "Lorem Pixels".
 * Click install. Click activate.


= Method #2 =

 * Download this plugin as a .zip file.
 * Go to WP Admin > Plugins > Add new > Upload Plugin.
 * Upload the .zip file and activate the plugin.


= Method #3 =

 * Download the file lorem-pixels.zip.
 * Unzip the file on your computer.
 * Upload folder lorem-pixels (you just unzipped) to /wp-content/plugins/ directory.
 * Activate the plugin through the WP Admin > Plugins menu.

Click on [how to install a WordPress Plugin](http://goo.gl/Ims8pt) for more details.


== Frequently Asked Questions ==

= How can I use it? =

Within your blog post or page, write a insert the similar snippet below:

Example for random text:

`[lorem]`


Example for random image:

`[pixel width="200" height="100"]`

The image server possibly allows to generate images of arbitrary dimensions. You can use your best fitting dimensions.


== Screenshots ==

1. Setup


== Changelog ==

= 1.0.0 =
* Initial release.


== Upgrade Notice ==

When this plugin is used and disabled, your blogs will show your `[lorem]` and `[pixel]` shortcodes in raw format.
Once you gather real contents and images for your website, replace those shortcodes.