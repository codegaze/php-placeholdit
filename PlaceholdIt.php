<?php

class Placeholdit {

    public $colors;

    function __construct() {
        $this->colors = $this->getColors();
    }
    /**
     * Get the html markup of the placeholder image. If height is null then create a 
     * square image based on the given width
     * 
     * @param  [Number] $width  Width of the image
     * @param  [Number] $height Height of the image
     * @return [String] Echoes the image markup
     */
    public function getImage($width, $height = null) {

      $random_color = str_replace("#", "", $this->colors[rand(0, count($this->colors)-1)]['hex']);
      
      if($height === null) {
        $height = $width;
      }
      
      echo '<img src="http://placehold.it/' . $width . 'x' . $height . '/' . $random_color . '/ffffff" />'; 

    }

    /**
     * Read the json color file and return the contents.
     * @return [type] [description]
     */
    public function getColors() {
        
        return json_decode(file_get_contents('./data/flat-colors.json'), TRUE);
        
    }

}

?>