<?php
Redux::setSection( $opt_name, array(
   'title' => esc_html__('Breadcrumb Options', 'codesk'),
   'desc' => '',
   'icon' => 'el-icon-compass',
   'fields' => array(
      array(
        'id' => 'breadcrumb_show_title',
        'type' => 'button_set',
        'title' => esc_html__('Breadcrumb Display Title Page', 'codesk'),
        'desc' => '',
        'options' => array(1 => 'Enable', 0 => 'Disable'),
        'default' => 1
      ),
      array(
        'id'        => 'breadcrumb_padding_top',
        'type'      => 'slider',
        'title'     => esc_html__( 'Breadcrumb Padding Top', 'codesk' ),
        'default'   => 135,
        'min'       => 50,
        'max'       => 500,
        'step'      => 1,
        'display_value' => 'text',
      ),
      array(
        'id'        => 'breadcrumb_padding_bottom',
        'type'      => 'slider',
        'title'     => esc_html__( 'Breadcrumb Padding Top', 'codesk' ),
        'default'   => 135,
        'min'       => 50,
        'max'       => 500,
        'step'      => 1,
        'display_value' => 'text',
      ),
      array(
        'id' => 'breadcrumb_background_color',
        'type' => 'color',
        'title' => esc_html__('Background Overlay Color', 'codesk'),
        'default' => '#342d2c'
      ),
      array(
        'id'        => 'breadcrumb_background_opacity',
        'type'      => 'slider',
        'title'     => esc_html__( 'Breadcrumb Ovelay Color Opacity', 'codesk' ),
        'default'   => 50,
        'min'       => 0,
        'max'       => 100,
        'step'      => 1,
        'display_value' => 'text',
      ),
      array(
        'id' => 'breadcrumb_image',
        'type' => 'button_set',
        'title' => esc_html__('Enable Breadcrumb Image', 'codesk'),
        'desc' => '',
        'options' => array(1 => 'Enable', 0 => 'Disable'),
        'default' => 1
      ),
      array(
        'id' => 'breadcrumb_background_image',
        'type' => 'media',
        'url' => true,
        'title' => esc_html__('Breadcrumb Background Image', 'codesk'),
        'default' => '',
        'required'  => array( 'breadcrumb_image', '=', 1 )
      ),
      array(
        'id'    => 'breadcrumb_text_stype',
        'type'    => 'select',
        'title'   => esc_html__( 'Breadcrumb Text Stype', 'codesk' ),
        'options' => 
        array(
          'text-light'     => esc_html__('Light', 'codesk'),
          'text-dark'      => esc_html__('Dark', 'codesk')
        ),
        'default' => 'text-light'
      ),
      array(
        'id'    => 'breadcrumb_text_align',
        'type'    => 'select',
        'title'   => esc_html__( 'Breadcrumb Text Align', 'codesk' ),
        'options' => 
        array(
          'text-left'      => esc_html__('Left', 'codesk'),
          'text-center'    => esc_html__('Center', 'codesk'),
          'text-right'     => esc_html__('Right', 'codesk')
        ),
        'default' => 'text-left'
      )
   )
) );