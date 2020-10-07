<?php
  Redux::setSection( $opt_name, array(
    'title' => esc_html__('Header Options', 'codesk'),
    'desc' => '',
    'icon' => 'el-icon-compass',
    'fields' => array(
      array(
        'id' => 'header_layout',
        'type' => 'select',
        'title' => esc_html__('Header Layout', 'codesk'),
        'subtitle' => esc_html__('Select a header layout option from the examples.', 'codesk'),
        'desc' => '',
        'options' => codesk_get_headers(false),
        'default' => 'header-1'
      ),
      array(
        'id' => 'header_logo', 
        'type' => 'media',
        'url' => true,
        'title' => esc_html__('Logo in header', 'codesk'), 
        'default' => ''
      ),  
      array(
        'id' => 'header_logo_mobile',
        'type' => 'media',
        'url' => true,
        'title' => esc_html__('Logo in header mobile', 'codesk'),
        'default' => ''
      ),
    )
  ));