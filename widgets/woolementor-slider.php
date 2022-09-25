<?php
// @author sifat
class Elementor_Hello_World_Widget_2 extends \Elementor\Widget_Base {

	public function get_name() {
		return 'woolementor-slider';
	}

	public function get_title() {
		return esc_html__( 'woolementor-slider', 'elementor-addon' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'hello', 'world' ];
	}
 
	protected function render() {
	
	}
}