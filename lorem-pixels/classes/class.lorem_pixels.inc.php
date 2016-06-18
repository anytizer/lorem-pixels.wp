<?php
class lorem_pixels
{
	/**
	 * @todo Clone the project and build your own micro content server
	 * @see https://github.com/bimalpoudel/micro-services
	 * @see https://github.com/bimalpoudel/micro-services/tree/master/micro-services/lorem
	 */
	public $text_api = 'http://bimal.org.np/micro-services/lorem/lorem.php';
	
	/**
	 * Publicly available random image hosts; try any one you like the best:
	 *
	 * http://placehold.it/%dx%d
	 * https://source.unsplash.com/random/%dx%d
	 * http://loremflickr.com/320/240?random=1
	 * http://thecatapi.com/docs.html
	 * http://www.freedigitalphotos.net/
	 * http://www.splashbase.co/api
	 * https://pixabay.com/api/docs/
	 * http://placehold.it/350x150 *
	 * http://fpoimg.com/300x300?text=Advertisement http://fpoimg.com/
	 * http://nosrc.net/100x100 *
	 * http://ipsumimage.appspot.com/
	 * http://dummyimage.com/#standards
	 * http://dummyimage.com/600x400/000/fff.png
	 */
	public $image_api = 'http://placehold.it/%dx%d';
	
	private $whoami = '';

	public function init($whoami='plugin-name/plugin-name.php')
	{
		$this->whoami = $whoami;

		add_shortcode('lorem', array($this, '_shortcode_lorem'));
		add_shortcode('pixel', array($this, '_shortcode_pixel'));
		
		add_action('plugin_row_meta', array($this, '_plugin_row_meta'), 10, 2);
	}

	/**
	 * Generate a paragraph of random text
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
	 * [pixel]
	 * [pixel width="200" height="100"]
	 */
	function _shortcode_pixel($atts, $content = null ) {
		extract(shortcode_atts(array(
			'height' => 100,
			'width' => 200,
		), $atts));

		$src = sprintf($this->image_api, $width, $height, mt_rand(1000, 9999));
		return "<img alt='Random Pixel' src='{$src}' width='{$width}' height='{$height}'>";
	}
	
	public function _plugin_row_meta($links, $file) {

		if($file == $this->whoami)
		{
			$new_links = array(
				'why' => '<a href="https://github.com/bimalpoudel/lorem-pixels/blob/master/why.md" target="_blank">Why do I need this plugin?</a>',
			);
			
			$links = array_merge( $links, $new_links );
		}
		
		return $links;
	}
}
