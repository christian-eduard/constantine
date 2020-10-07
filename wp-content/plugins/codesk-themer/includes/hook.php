<?php
 function codesk_themer_build_meta_box() {
   echo'<div class="gva-meta-tabs"><div id="gva-meta-tabs-boxes"></div></div>';
}
   
function codesk_themer_register_meta_box_holder() {
   add_meta_box( 'gaviasthemer_meta_box', esc_html__( 'Meta Options', 'codesk-themer' ), 'codesk_themer_build_meta_box', '', 'normal', 'low' );
}

add_action( 'add_meta_boxes', 'codesk_themer_register_meta_box_holder' );

function codesk_themer_mime_types($mimes) {
 $mimes['svg'] = 'image/svg+xml';
 return $mimes;
}
add_filter('upload_mimes', 'codesk_themer_mime_types');