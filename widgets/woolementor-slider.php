<!-- <?php
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

		$settings = $this->get_settings_for_display();

		/*Get data from api */ 
		// @author zahirul Islam
		$all_src = [];
		$url = 'https://api.wordpress.org/plugins/info/1.0/woolementor.json';
		$request = wp_remote_get( $url );
		if( is_wp_error( $request ) ) {
			return false;
			} 
		$body = wp_remote_retrieve_body( $request );
		$data = json_decode( $body ,true);
		for( $i=1; $i < 6; $i++) { // Condition was wrong
			$all_src[$i] = $data['screenshots'][$i]["src"];
		}
			//echo var_dump($all_src);
			
			// Show screenshot to page
			foreach ($all_src as $img) {
				echo '<div>';
				echo '<img src="'. $img .'" />';
				echo '</div>';
			}
		} 
		    
	
	}
}