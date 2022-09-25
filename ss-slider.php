<?php

class ss_slider extends \Elementor\Widget_Base {
    public function get_name() {
        return 'ss_slider';
    }

    public function get_title() {
        return esc_html__( 'CoDesigner SS Slider', 'elementor-addon' );
    }

    public function get_icon() {
        return 'eicon-media-carousel';
    }

    public function get_categories() {
        return [ 'basic' ];
    }

    public function get_keywords() {
        return [ 'codesigner', 'slider' ];
    }

    public function get_ss(){
      $url = 'https://api.wordpress.org/plugins/info/1.0/woolementor.json';

//    Fetch Data From API
      $response = wp_remote_get( $url );
      $body     = wp_remote_retrieve_body( $response );
      $data = json_decode($body, true);

      return $data['screenshots'];
    }

    protected function render() {

        $data = $this->get_ss();

        echo '<div class="slideshow-container">';
        echo '<h3 class="slider-title">CoDesigner Screenshots Slider</h3>';
        foreach ($data as $img) {
            echo '<div class="mySlides fade">';
            echo '<img src="'. $img['src'] .'" />';
            echo '</div>';
        }
        echo '<a class="prev" onclick="plusSlides(-1)">❮</a>';
        echo '<a class="next" onclick="plusSlides(1)">❯</a>';
        echo '</div>';
    }
}