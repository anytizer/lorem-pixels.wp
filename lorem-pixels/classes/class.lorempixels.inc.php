<?php
class lorempixels
{
	/**
	 * @todo Use your own server
	 */
	public $text_api = 'http://bimal.org.np/micro-services/lorem/lorem.php';
	public $image_api = 'https://source.unsplash.com/random/%dx%d';

	public function init()
	{
		add_shortcode('lorem', array($this, '_shortcode_lorem'));
		add_shortcode('image', array($this, '_shortcode_image'));
	}

	/**
	 * [lorem]
	 */
	public function _shortcode_lorem($atts, $content = null ) {
		extract(shortcode_atts(array(
		), $atts));

		$lorem_api = sprintf($this->text_api);
		$lorem = file_get_contents($lorem_api);
		return "<p>{$lorem}</p>";
	}
	
	/**
	 * [image]
	 * [image width="200" height="100"]
	 */
	function _shortcode_image($atts, $content = null ) {
		extract(shortcode_atts(array(
			'height' => 100,
			'width' => 200,
		), $atts));

		$src = sprintf($this->image_api, $width, $height, mt_rand(1000, 9999));
		return "<img src='{$src}' width='{$width}' height='{$height}'>";
	}
}
