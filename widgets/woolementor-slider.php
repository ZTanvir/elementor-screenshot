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
				 
		echo ' 
		<div class="slideshow-container">

	   <!-- Full-width images with number and caption text -->
	   
	 
	   <div class="mySlides fade">
		 <div class="numbertext"> </div>
		 <img src="'.$all_src[1].'" style="width:100%">
		 <div class="text">Caption Two</div>
	   </div>
	 
	   <div class="mySlides fade">
		 <div class="numbertext"> </div>
		 <img src="'.$all_src[2].'" style="width:100%">
		 <div class="text">Caption Three</div>
	   </div>
	   <div class="mySlides fade">
		 <div class="numbertext"></div>
		 <img src="'.$all_src[3].'" style="width:100%">
		 <div class="text">Caption Three</div>
	   </div>
	   <div class="mySlides fade">
		 <div class="numbertext"> </div>
		 <img src="'.$all_src[4].'" style="width:100%">
		 <div class="text">Caption Three</div>
	   </div>
	   <div class="mySlides fade">
		 <div class="numbertext"> </div>
		 <img src="'.$all_src[5].'" style="width:100%">
		 <div class="text">Caption Text</div>
	   </div>
	 
	   <!-- Next and previous buttons -->
	   <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	   <a class="next" onclick="plusSlides(1)">&#10095;</a>
	 </div>
	 <br>
	 
	 <!-- The dots/circles -->
	 <div style="text-align:center">
	   <span class="dot" onclick="currentSlide(1)"></span>
	   <span class="dot" onclick="currentSlide(2)"></span>
	   <span class="dot" onclick="currentSlide(3)"></span>
	   <span class="dot" onclick="currentSlide(4)"></span>
	   <span class="dot" onclick="currentSlide(5)"></span>
	 </div>';
	   

		
   } 
	   
}
