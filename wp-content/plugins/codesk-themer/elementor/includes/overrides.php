<?php
use Elementor\Controls_Manager;
use Elementor\Repeater;
class GVA_Elementor_Override{
   public function __construct() {
      $this->add_actions();
      $this->elementor_init_setup();
   }

   function elementor_init_setup(){
      if(!get_option('elementor_allow_svg', '')) update_option( 'elementor_allow_svg', 1 );
      if(!get_option('elementor_load_fa4_shim', '')) update_option( 'elementor_load_fa4_shim', 'yes' );
      if(!get_option('elementor_disable_color_schemes', '')) update_option( 'elementor_disable_color_schemes', 'yes' );
      if(!get_option('elementor_disable_typography_schemes', '')) update_option( 'elementor_disable_typography_schemes', 'yes' );
      if(!get_option('elementor_container_width', '')) update_option( 'elementor_container_width', '1200' );
      if(!get_option('elementor_viewport_lg', '')) update_option( 'elementor_viewport_lg', '992' );
      $cpt_support = get_option( 'elementor_cpt_support' );
      $cpt_support[] = 'post';
      $cpt_support[] = 'page';
      $cpt_support[] = 'footer';
      $cpt_support[] = 'gva_header';
      update_option('elementor_cpt_support', $cpt_support);
   }

   public function add_actions() {
      add_action( 'elementor/element/column/layout/after_section_end', [ $this, 'after_column_end' ], 10, 2 );
      add_action( 'elementor/element/section/section_layout/after_section_end', [ $this, 'after_row_end' ], 10, 2 );
   }

   public function after_column_end( $obj, $args ) {
      $obj->start_controls_section(
         'gva_section_column',
         array(
            'label' => esc_html__( 'Gavias Extra Settings', 'codesk-themer' ),
            'tab'   => Controls_Manager::TAB_LAYOUT,
         )
      );
      $obj->add_control(
         '_gva_extra_classes',
         [
            'label' => __( 'Background Style Available', 'gaviasthemer' ),
            'type' => Controls_Manager::SELECT,
            'options' => [
               '' => __( '-- None --', 'gaviasthemer' ),
               'bg-overflow-left' => __( 'Background Overflow Left', 'gaviasthemer' ),
               'bg-overflow-right' => __( 'Background Overflow Right', 'gaviasthemer' ),
            ],
            'default' => 'top',
            'prefix_class' => 'column-style-',
         ]
     );
      $obj->add_control(
         '_gva_elements_style',
         [
            'label' => __( 'Elements Style', 'codesk-themer' ),
            'type' => Controls_Manager::SELECT,
            'options' => [
               '' => __( '-- None --', 'codesk-themer' ),
               'flex-element-center' => __( 'Flex Elements Center Align Left', 'codesk-themer' ),
               'flex-element-center-ali-right' => __( 'Flex Elements Center Align Right', 'codesk-themer' ),
            ],
            'default' => '',
            'prefix_class' => '',
         ]
     );
      $obj->add_control(
         '_gva_column_style_available',
         [
            'label' => __( 'Column Style available', 'codesk-themer' ),
            'type' => Controls_Manager::SELECT,
            'options' => [
               '' => __( '-- None --', 'codesk-themer' ),
               'column-style-1' => __( 'Column Width Extra to Right', 'codesk-themer' ),
            ],
            'default' => '',
            'prefix_class' => '',
         ]
     );
      $obj->end_controls_section();     
   }

   public function after_row_end( $obj, $args ) {
      $_post_type = get_post_type();
      //if($_post_type == 'gva_header'){
         $obj->start_controls_section(
            'gva_section_row',
            array(
               'label' => esc_html__( 'Sticky Menu Settings (Use only for row in header)', 'codesk-themer' ),
               'tab'   => Controls_Manager::TAB_LAYOUT,
            )
         );
         $obj->add_control(
            '_gva_sticky_menu',
            [
               'label'     => __( 'Sticky Menu Row', 'codesk-themer' ),
               'type'      => Controls_Manager::SELECT,
               'options'   => [
                  '' => __( '-- None --', 'codesk-themer' ),
                  'gv-sticky-menu' => __( 'Sticky Menu', 'codesk-themer' ),
               ],
               'default'         => '',
               'prefix_class'    => '',
               'description'     => __('You can only enable sticky menu for one row, please make sure display all sticky menu for other rows')
            ]
         );
         $obj->add_control(
            '_gva_sticky_background',
            [
               'label'     => __('Sticky Background Color', 'codesk-themer'),
               'type'      => Controls_Manager::COLOR,
               'selectors' => [
                  '{{WRAPPER}}.stuck' => 'background: {{VALUE}}', 
               ],
               'condition' => [
                  '_gva_sticky_menu!' => ''
               ]
            ]
         );
         $obj->add_control(
            '_gva_sticky_menu_text_color',
            [
               'label'     => __('Sticky Text Color', 'codesk-themer'),
               'type'      => Controls_Manager::COLOR,
               'selectors' => [
                  '{{WRAPPER}}.stuck' => 'color: {{VALUE}}', 
               ],
               'condition' => [
                  '_gva_sticky_menu!' => ''
               ]
            ]
         );
         $obj->add_control(
            '_gva_sticky_menu_link_color',
            [
               'label'     => __('Sticky Link Menu Color', 'codesk-themer'),
               'type'      => Controls_Manager::COLOR,
               'selectors' => [
                  '{{WRAPPER}}.stuck .gva-navigation-menu ul.gva-nav-menu > li > a' => 'color: {{VALUE}}',
               ],
               'condition' => [
                  '_gva_sticky_menu!' => ''
               ]
            ]
         );
         $obj->add_control(
            '_gva_sticky_menu_link_hover_color',
            [
               'label'     => __('Sticky Link Menu Hover Color', 'codesk-themer'),
               'type'      => Controls_Manager::COLOR,
               'selectors' => [
                  '{{WRAPPER}}.stuck .gva-navigation-menu ul.gva-nav-menu > li > a:hover' => 'color: {{VALUE}}',
               ],
               'condition' => [
                  '_gva_sticky_menu!' => ''
               ]
            ]
         );
         $obj->end_controls_section();
   }

}

new GVA_Elementor_Override();
