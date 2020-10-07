<?php
Redux::setSection( $opt_name, array(
  'title' => esc_html__('Footer Options', 'codesk'),
  'desc' => '',
  'icon' => 'el-icon-compass',
  'fields' => array(
    array(
      'id' => 'footer_layout',
      'type' => 'select',
      'options' => codesk_get_footer(),
      'default' => 'footer-1'
    ),
    array(
      'id' => 'copyright_default',
      'type' => 'button_set',
      'title' => esc_html__('Enable/Disable Copyright Text', 'codesk'),
      'desc' => '',
      'options' => array('yes' => 'Enable', 'no' => 'Disable'),
      'default' => 'yes'
    ),
    array(
      'id' => 'copyright_text',
      'type' => 'editor',
      'title' => esc_html__('Footer Copyright Text', 'codesk'),
      'desc' => '',
      'default' => "Copyright - 2020 - Company - All rights reserved. Powered by WordPress."
    ),
  )
));