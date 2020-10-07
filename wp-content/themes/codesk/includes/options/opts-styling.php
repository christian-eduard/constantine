<?php
Redux::setSection( $opt_name, array(
  'title'     => esc_html__( 'Styling', 'codesk' ),
  'icon'      => 'el-icon-pencil',
  'fields' => array(
    array(
      'id'  => 'colors_info_styling',
      'type'   => 'info',
      'raw' => '<h3 style="margin: 0;">' . esc_html__( 'Colors', 'codesk' ) . '</h3>'
    ),
    array(
      'id'        => 'main_color',
      'type'         => 'color',
      'title'        => esc_html__( 'Main Color', 'codesk' ),
      'desc'         => esc_html__( 'Used for the body text.', 'codesk' ),
      'default'      => '',
      'transparent'  => false,
      'validate'     => 'color'
    ),
    array(
      'id'  => 'info_background',
      'type'   => 'info',
      'raw' => '<h3 style="margin: 0;">' . esc_html__( 'Background', 'codesk' ) . '</h3>'
    ),
    array(
      'id'        => 'main_background_color',
      'type'         => 'color',
      'title'        => esc_html__( 'Background Color', 'codesk' ),
      'desc'         => esc_html__( 'Used for the main site background.', 'codesk' ),
      'default'      => '',
      'transparent'  => false,
      'validate'     => 'color'
    ),
    array(
      'id'  => 'main_background_image',
      'type'   => 'media', 
      'url' => true,
      'title'  => esc_html__( 'Background Image', 'codesk' ),
      'desc'   => esc_html__( 'Upload a background image or specify a URL (boxed layout).', 'codesk' )
    ),
    array(
      'id'     => 'main_background_image_type',
      'type'      => 'select',
      'title'     => esc_html__( 'Background Type', 'codesk' ),
      'desc'      => esc_html__( 'Select the background-image type (fixed image or repeat pattern/texture).', 'codesk' ),
      'options'   => array( 'fixed' => 'Fixed (Full)', 'repeat' => 'Repeat (Pattern)' ),
      'default'   => 'fixed'
    ),
    array(
      'id'  => 'main_content_info_styling',
      'type'  => 'info',
      'raw' => '<h3 style="margin: 0;">' . esc_html__( 'Main Content', 'codesk' ) . '</h3>'
    ),
    array(
      'id'    => 'content_background_color',
      'type'    => 'color',
      'title'   => esc_html__( 'Background Color', 'codesk' ),
      'desc'    => esc_html__( 'Used for the header background.', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),
    array(
      'id'    => 'content_font_color',
      'type'    => 'color',
      'title'   => esc_html__( 'Text Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),
    array(
      'id'    => 'content_font_color_link',
      'type'    => 'color',
      'title'   => esc_html__( 'Link Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),
     array(
      'id'    => 'content_font_color_link_hover',
      'type'    => 'color',
      'title'   => esc_html__( 'Link Hover Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),

    array(
      'id'  => 'footer_info_styling',
      'type'  => 'info',
      'raw' => '<h3 style="margin: 0;">' . esc_html__( 'Footer Default Styling', 'codesk' ) . '</h3>'
    ),
    array(
      'id'    => 'footer_background_color',
      'type'    => 'color',
      'title'   => esc_html__( 'Background Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),
    array(
      'id'    => 'footer_font_color',
      'type'    => 'color',
      'title'   => esc_html__( 'Text Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),
    array(
      'id'    => 'footer_font_color_link',
      'type'    => 'color',
      'title'   => esc_html__( 'Link Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    ),
     array(
      'id'    => 'footer_font_color_link_hover',
      'type'    => 'color',
      'title'   => esc_html__( 'Link Hover Color', 'codesk' ),
      'default' => '',
      'validate'  => 'color'
    )
  )
));