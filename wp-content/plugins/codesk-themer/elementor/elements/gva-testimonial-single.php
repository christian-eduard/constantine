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

class GVAElement_Testimonial_Single extends GVAElement_Base{

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
        return 'gva-testimonials-single';
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
        return __('GVA Testimonials Single', 'codesk-themer');
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
        return [ 'testimonial', 'content', 'carousel' ];
    }

    public function get_script_depends() {
      return [
          'slick',
          'gavias.elements',
      ];
    }

    public function get_style_depends() {
      return array('slick');
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
            'section_testimonial',
            [
                'label' => __('Testimonials', 'codesk-themer'),
            ]
        );
        $this->add_control(
            'style',
            array(
                'label'   => esc_html__( 'Style', 'codesk-themer' ),
                'type'    => Controls_Manager::SELECT,
                'default' => 'style-1',
                'options' => [
                  'style-1' => esc_html__('Style I', 'codesk-themer'),
                ]
            )
         );
        $this->add_control(
            'testimonials',
            [
                'label'       => __('Testimonials Content Item', 'codesk-themer'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => [
                    [
                        'name'        => 'testimonial_content',
                        'label'       => __('Content', 'codesk-themer'),
                        'type'        => Controls_Manager::TEXTAREA,
                        'default'     => 'This is due to their excellent service, competitive pricing and customer support. It is throughly refresing to get such a personal touch.',
                        'label_block' => true,
                        'rows'        => '10',
                    ],
                    [
                        'name'       => 'testimonial_background',
                        'label'      => __('Testimonial Background Image', 'codesk-themer'),
                        'default'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg.jpg',
                        ],
                        'type'       => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'       => 'testimonial_image',
                        'label'      => __('Testimonial Thumbnail', 'codesk-themer'),
                        'default'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial.jpg',
                        ],
                        'type'       => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'    => 'testimonial_name',
                        'label'   => __('Name', 'codesk-themer'),
                        'default' => 'John Doe',
                        'type'    => Controls_Manager::TEXT,
                    ],
                    [
                        'name'    => 'testimonial_video',
                        'label'   => __('Video Link', 'codesk-themer'),
                        'default' => '#',
                        'type'    => Controls_Manager::TEXT,
                    ],
                   
                ],
                'title_field' => '{{{ testimonial_name }}}',
                'default'     => array(
                    array(
                        'testimonial_content'  => esc_html__( 'This is due to their excellent service, competitive pricing and customer support. It is throughly refresing to get such a personal touch.', 'codesk-themer' ),
                        'testimonial_name'     => esc_html__( 'Christine Eve', 'codesk-themer' ),
                        'testimonial_video'      => '#',
                        'testimonial_image'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial.jpg',
                        ],
                        'testimonial_background'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg.jpg',
                        ]
                    ),
                    array(
                        'testimonial_content'  => esc_html__( 'This is due to their excellent service, competitive pricing and customer support. It is throughly refresing to get such a personal touch.', 'codesk-themer' ),
                        'testimonial_name'     => esc_html__( 'Kevin Smith', 'codesk-themer' ),
                        'testimonial_video'      => '#',
                        'testimonial_image'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial.jpg',
                        ],
                        'testimonial_background'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg.jpg',
                        ]
                    ),
                    array(
                        'testimonial_content'  => esc_html__( 'This is due to their excellent service, competitive pricing and customer support. It is throughly refresing to get such a personal touch.', 'codesk-themer' ),
                        'testimonial_name'     => esc_html__( 'Jessica Brown', 'codesk-themer' ),
                        'testimonial_video'      => '#',
                        'testimonial_image'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial.jpg',
                        ],
                        'testimonial_background'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg.jpg',
                        ]
                    ),
                    array(
                        'testimonial_content'  => esc_html__( 'This is due to their excellent service, competitive pricing and customer support. It is throughly refresing to get such a personal touch.', 'codesk-themer' ),
                        'testimonial_name'     => esc_html__( 'David Anderson', 'codesk-themer' ),
                        'testimonial_video'      => '#',
                        'testimonial_image'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial.jpg',
                        ],
                        'testimonial_background'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg.jpg',
                        ]
                    ),
                    array(
                        'testimonial_content'  => esc_html__( 'This is due to their excellent service, competitive pricing and customer support. It is throughly refresing to get such a personal touch.', 'codesk-themer' ),
                        'testimonial_name'     => esc_html__( 'David Anderson', 'codesk-themer' ),
                        'testimonial_video'      => '#',
                        'testimonial_image'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial.jpg',
                        ],
                        'testimonial_background'    => [
                            'url' => GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg.jpg',
                        ]
                    ),
                ),
            ]
        );

        $this->add_group_control(
            Elementor\Group_Control_Image_Size::get_type(),
            [
                'name'      => 'testimonial_image', 
                'default'   => 'full',
                'separator' => 'none',
                'condition' => [
                    'style' => array('style-1', 'style-2')
                ]
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

         $this->add_control_carousel( false,
            array(
               'style' => ['style-1', 'style-2']
            )
         );

        // Style.
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => __('Content', 'codesk-themer'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'content_content_color',
            [
                'label'     => __('Text Color', 'codesk-themer'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .gva-testimonial-carousel .testimonial-content' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .gva-testimonial-carousel .icon-quote' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'content_typography',
                'scheme'   => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .gva-testimonial-carousel .testimonial-item .testimonial-content',
            ]
        );

        $this->end_controls_section();

        // Image Styling
        $this->start_controls_section(
            'section_style_image',
            [
                'label'     => __('Image', 'codesk-themer'),
                'tab'       => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'image_size',
            [
                'label'      => __('Image Size', 'codesk-themer'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min' => 20,
                        'max' => 200,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .gva-testimonial-carousel .testimonial-image img' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'      => 'image_border',
                'selector'  => '{{WRAPPER}} .gva-testimonial-carousel .testimonial-image img',
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
                    '{{WRAPPER}} .gva-testimonial-carousel .testimonial-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Name Styling
        $this->start_controls_section(
            'section_style_name',
            [
                'label' => __('Name', 'codesk-themer'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'name_text_color',
            [
                'label'     => __('Text Color', 'codesk-themer'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .testimonial-name, {{WRAPPER}} .testimonial-name a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'name_typography',
                'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .testimonial-name',
            ]
        );

        $this->end_controls_section();

        // Job Styling
        $this->start_controls_section(
            'section_style_job',
            [
                'label' => __('Job', 'codesk-themer'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'job_text_color',
            [
                'label'     => __('Text Color', 'codesk-themer'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .testimonial-job, {{WRAPPER}} .testimonial-job a' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'job_typography',
                'scheme'   => Scheme_Typography::TYPOGRAPHY_1,
                'selector' => '{{WRAPPER}} .elementor-testimonial-job',
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
      if(isset($settings['style']) && $settings['style']){
         include $this->get_template('testimonials-single/gva-testimonials-' . $settings['style'] . '.php');
      }
      print '</div>';
    }

}
