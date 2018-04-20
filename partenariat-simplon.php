<?php
/*
Plugin Name: Mention-Simplon
Plugin URI: http://simplon-plugin.com
Description: plugin pour partenariat Simplon
Version: 0.1
Author: Gaelle THOMAS
Author URI: http://blog-trotter.com
License: GPL2
*/
function SimplonShortcode() {
	return '<p><i>La publication de cet article est possible grâce à mon super partenaire <a href="http://www.simplon.co">simplon.co</a> - une entreprise de
l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
des formations GRATUITES pour devenir développeur web.</i></p>';
}
add_shortcode('mention-simplon', 'SimplonShortcode');
