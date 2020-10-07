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

class GVAElement_Socials extends GVAElement_Base{

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
        return 'gva-socials';
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
        return __('GVA Socials', 'codesk-themer');
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
        return 'eicon-posts-grid';
    }

    public function get_keywords() {
        return [ 'social', 'content', 'link' ];
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
            'section_socials',
            [
                'label' => __('Socials', 'codesk-themer'),
            ]
        );

        $this->add_control(
            'socials',
            [
                'label'       => __('Social Icon Item', 'codesk-themer'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => [
                    [
                        'name'       => 'social_title',
                        'label'      => __('Title', 'codesk-themer'),
                        'type'       => 'text',
                        'show_label' => false,
                    ],
                    [
                        'name'       => 'social_icon',
                        'label'      => __('Choose Icon', 'codesk-themer'),
                        'type'       => 'icon',
                        'show_label' => false,
                    ],
                    [
                        'name'    => 'social_link',
                        'label'   => __('Social Link', 'codesk-themer'),
                        'default' => 'John Doe',
                        'type'    => Controls_Manager::TEXT,
                    ],
                    [
                        'name'      => 'social_color',
                        'label'     => __('Social Color', 'codesk-themer'),
                        'type'      => Controls_Manager::COLOR,
                        'default'   => '',
                        'selectors' => [
                            '{{WRAPPER}} .gva-socials {{CURRENT_ITEM}} a' => 'background: {{VALUE}};',
                            '{{WRAPPER}} .gva-socials {{CURRENT_ITEM}} a::before' => 'background: {{VALUE}};',
                        ],
                    ]
                   
                ],
                'title_field' => '{{{ social_title }}}',
                'default'     => array(
                    array(
                        'social_title'      => esc_html__( 'Facebook', 'codesk-themer' ),
                        'social_icon'       => esc_html__( 'fa fa-facebook', 'codesk-themer' ),
                        'social_link'       => '#',
                    ),
                    array(
                        'social_title'      => esc_html__( 'Twitter', 'codesk-themer' ),
                        'social_icon'       => esc_html__( 'fa fa-twitter', 'codesk-themer' ),
                        'social_link'       => '#',
                    ),
                    array(
                        'social_title'      => esc_html__( 'Instagram', 'codesk-themer' ),
                        'social_icon'       => esc_html__( 'fa fa-instagram', 'codesk-themer' ),
                        'social_link'       => '#',
                    ),
                    array(
                        'social_title'      => esc_html__( 'pinterest', 'codesk-themer' ),
                        'social_icon'       => esc_html__( 'fa fa-pinterest', 'codesk-themer' ),
                        'social_link'       => '#',
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
                  'style-1' => esc_html__('Style I ', 'codesk-themer'),
                ]
            )
        );

        $this->add_control(
            'align',
            [
                'label' => __( 'Alignment', 'codesk-themer' ),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => __( 'Left', 'codesk-themer' ),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => __( 'Center', 'codesk-themer' ),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => __( 'Right', 'codesk-themer' ),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
            ]
        );
        $this->end_controls_section();


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
                    '{{WRAPPER}} .testimonial-content' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .icon-quote' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'content_typography',
                'scheme'   => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .elementor-testimonial-content',
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
                    '{{WRAPPER}} .elementor-testimonial-wrapper .elementor-testimonial-image img' => 'width: {{SIZE}}{{UNIT}};height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name'      => 'image_border',
                'selector'  => '{{WRAPPER}} .elementor-testimonial-wrapper .elementor-testimonial-image img',
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
                    '{{WRAPPER}} .elementor-testimonial-wrapper .elementor-testimonial-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                'selector' => '{{WRAPPER}} .elementor-testimonial-name',
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
                    '{{WRAPPER}} .elementor-testimonial-job' => 'color: {{VALUE}};',
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
         include $this->get_template('gva-socials.php');
      }
      print '</div>';
    }

}
