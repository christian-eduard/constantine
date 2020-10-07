<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;

class GVAElement_Brand extends GVAElement_Base{

    /**
     * Get widget name.
     *
     * Retrieve testimonial widget name.
     *
     * @since  1.0.0
     * @access public
     *
     * @return string Widget name.
     */
    public function get_name() {
        return 'gva-brand';
    }

    /**
     * Get widget title.
     *
     * Retrieve testimonial widget title.
     *
     * @since  1.0.0
     * @access public
     *
     * @return string Widget title.
     */
    public function get_title() {
        return __('GVA Brand', 'codesk-themer');
    }

    /**
     * Get widget icon.
     *
     * Retrieve testimonial widget icon.
     *
     * @since  1.0.0
     * @access public
     *
     * @return string Widget icon.
     */
    public function get_icon() {
        return 'eicon-posts-carousel';
    }

    public function get_keywords() {
        return [ 'brand', 'content', 'carousel' ];
    }

    public function get_script_depends() {
      return [
          'jquery.owl.carousel',
          'gavias.elements',
      ];
    }

    public function get_style_depends() {
      return array('owl-carousel-css');
    }

    /**
     * Register testimonial widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since  1.0.0
     * @access protected
     */
    protected function _register_controls() {
        $this->start_controls_section(
            'section_content',
            [
                'label' => __('Content', 'codesk-themer'),
            ]
        );

        $this->add_control(
            'brands',
            [
                'label'       => __('Brand Content Item', 'codesk-themer'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => [
                    [
                        'name'        => 'title',
                        'label'       => __('Title', 'codesk-themer'),
                        'type'        => Controls_Manager::TEXT,
                        'default'     => 'Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.',
                        'label_block' => true,
                    ],
                    [
                        'name'       => 'image',
                        'label'      => __('Choose Image', 'codesk-themer'),
                        'default'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/brand.png',
                        ],
                        'dynamic' => [
                          'active' => true,
                        ],
                        'type'       => Controls_Manager::MEDIA,
                        'show_label' => false,
                    ],
                    [
                        'name'       => 'link',
                        'label'      => __('Link', 'codesk-themer'),
                        'placeholder' => __( 'https://your-link.com', 'codesk-themer' ),
                        'type'       => Controls_Manager::URL,
                    ]

                ],
                'title_field' => '{{{ title }}}',
                'default'     => array(
                    array(
                        'title'  => esc_html__( 'Brand 1', 'codesk-themer' )
                    ),
                    array(
                        'title'  => esc_html__( 'Brand 2', 'codesk-themer' )
                    ),
                    array(
                        'title'  => esc_html__( 'Brand 3', 'codesk-themer' )
                    ),
                    array(
                        'title'  => esc_html__( 'Brand 4', 'codesk-themer' )
                    ),
                    array(
                        'title'  => esc_html__( 'Brand 5', 'codesk-themer' )
                    ),
                    array(
                        'title'  => esc_html__( 'Brand 6', 'codesk-themer' )
                    ),
                ),
            ]
        );
        $this->add_control(
            'style',
            array(
                'label'   => esc_html__( 'Style', 'codesk-themer' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'style-1',
                'options' => [
                  'style-1' => esc_html__('Carousel 2 Rows', 'codesk-themer'),
                  'style-2' => esc_html__('Carousel 1 Row', 'codesk-themer'),
                ]
            )
        );
        $this->add_group_control(
            Elementor\Group_Control_Image_Size::get_type(),
            [
                'name'      => 'image', 
                'default'   => 'full',
                'separator' => 'none',
            ]
        );

        $this->add_control(
            'view',
            [
                'label'   => __('View', 'codesk-themer'),
                'type'    => Controls_Manager::HIDDEN,
                'default' => 'traditional',
            ]
        );
        $this->end_controls_section();

        $this->add_control_carousel(false);


        // Image Styling
        $this->start_controls_section(
            'section_style_image',
            [
                'label'     => __('Image', 'codesk-themer'),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'      => 'image_border',
                'selector'  => '{{WRAPPER}} .gva-brand-carousel .brand-item-content img',
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'image_border_radius',
            [
                'label'      => __('Border Radius', 'codesk-themer'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .gva-brand-carousel .brand-item-content img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

     


        

    }

    /**
     * Render testimonial widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since  1.0.0
     * @access protected
     */
    protected function render() {
      $settings = $this->get_settings_for_display();
      printf( '<div class="gva-element-%s gva-element">', $this->get_name() );
        include $this->get_template('gva-brand.php');
      print '</div>';
    }

}
