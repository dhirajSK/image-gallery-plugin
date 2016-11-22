	<?php

function sindabad_add_meta_box(){
   add_meta_box('Gallery Shortcode','Gallery Shortcode','sindabad_add_shortcode_meta_box_function','post');
   add_meta_box('Gallery Shortcode','Gallery Shortcode','sindabad_add_shortcode_meta_box_function','page');   
  }

add_action('add_meta_boxes','sindabad_add_meta_box');

function sindabad_add_shortcode_meta_box_function(){
  ?><input readonly="readonly" type="text" value='[sindabadSC title="gallery title"]' size="30">
  <?php
}