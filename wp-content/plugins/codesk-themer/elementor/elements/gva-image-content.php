<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Typography;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Border;
use Elementor\Group_Control_Image_Size;
/**
 * Elementor heading widget.
 *
 * Elementor widget that displays an eye-catching headlines.
 *
 * @since 1.0.0
 */
class GVAElement_Image_Content extends GVAElement_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve heading widget name.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'gva-image-content';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve heading widget title.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return __( 'GVA Image Content', 'codesk-themer' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve heading widget icon.
	 *
	 * @since 1.0.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'eicon-featured-image';
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 2.1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'image', 'content' ];
	}

	/**
	 * Register heading widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_title',
			[
				'label' => __( 'Content', 'codesk-themer' ),
			]
		);
		$this->add_control(
			'title_text',
			[
				'label' => __( 'Title', 'codesk-themer' ),
				'type' => Controls_Manager::TEXT,
				'placeholder' => __( 'Enter your title', 'codesk-themer' ),
				'default' => __( 'Add Your Heading Text Here', 'codesk-themer' ),
				'label_block' => true
			]
		);
		$this->add_control(
			'image',
			[
				'label' => __( 'Choose Image', 'codesk-themer' ),
				'type' => Controls_Manager::MEDIA,
				'label_block' => true,
				'default' => [
					'url' => Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);
		$this->add_control(
			'image_second',
			[
				'label' => __( 'Choose Image Second', 'codesk-themer' ),
				'type' => Controls_Manager::MEDIA,
				'label_block' => true,
				'default' => [
					'url' => Elementor\Utils::get_placeholder_image_src(),
				],
				'condition' => [
					'style' => ['skin-v1']
				],
			]
		);
		$this->add_group_control(
         Elementor\Group_Control_Image_Size::get_type(),
         [
            'name'      => 'image',
            'default'   => 'full',
            'separator' => 'none',
	         'condition' => [
					'style!' => ['skin-v1'],
				]
         ]
      );
		$this->add_control(
			'description_text',
			[
				'label' => __( 'Description', 'codesk-themer' ),
				'type' => Controls_Manager::TEXTAREA,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'Enter Your Description', 'codesk-themer' ),
				'condition' => [
					'style!' => ['skin-v1',  'skin-v3'],
				],
			]
		);
		$this->add_control(
			'style',
			[
				'label' => __( 'Style', 'codesk-themer' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'skin-v1' => esc_html__('Style I', 'codesk-themer'),
					'skin-v2' => esc_html__('Style II', 'codesk-themer'),
					'skin-v3' => esc_html__('Style III', 'codesk-themer'),
					'skin-v4' => esc_html__('Style IV', 'codesk-themer'),
				],
				'default' => 'skin-v1',
			]
		);
		$this->add_responsive_control(
			'box_height',
			[
				'label' => __( 'Height', 'codesk-themer' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 365,
				],
				'range' => [
					'px' => [
						'min' => 100,
						'max' => 800,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .gsc-image-content.skin-v3 .main-background' => 'height: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'style' => ['skin-v3'],
				],
			]
		);
		$this->add_control(
			'header_tag',
			[
				'label' => __( 'HTML Tag', 'codesk-themer' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'h1' => 'H1',
					'h2' => 'H2',
					'h3' => 'H3',
					'h4' => 'H4',
					'h5' => 'H5',
					'h6' => 'H6',
					'div' => 'div',
					'span' => 'span',
					'p' => 'p',
				],
				'default' => 'h2',
			]
		);
		$this->add_control(
			'link',
			[
				'label' => __( 'Link', 'codesk-themer' ),
				'type' => Controls_Manager::URL,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'https://your-link.com', 'codesk-themer' ),
				'label_block' => true
			]
		);

		$this->add_control(
			'link_text',
			[
				'label' => __( 'Text Link', 'codesk-themer' ),
				'type' => Controls_Manager::TEXT,
				'dynamic' => [
					'active' => true,
				],
				'placeholder' => __( 'Read More', 'codesk-themer' ),
				'default' => __( 'Read More', 'codesk-themer' ),
				'condition' => [
					'style!' => ['skin-v1', 'skin-v2'],
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_box_style',
			[
				'label' => __( 'Box', 'codesk-themer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'box_primary_color',
			[
				'label' => __( 'Primary Color', 'codesk-themer' ),
				'type' => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .gsc-image-content.skin-v1::before' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .gsc-image-content.skin-v3 .box-background::before' => 'background-color: {{VALUE}};',
					'{{WRAPPER}} .gsc-image-content.skin-v3 .image::after' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_title_style',
			[
				'label' => __( 'Title', 'codesk-themer' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'title_color',
			[
				'label' => __( 'Text Color', 'codesk-themer' ),
				'type' => Controls_Manager::COLOR,
				'default'   => '',
				'selectors' => [
					'{{WRAPPER}} .gsc-image-content .box-content .title' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography',
				'selector' => '{{WRAPPER}} .gsc-image-content .box-content .title',
			]
		);

		$this->add_control(
			'title_space_bottom',
			[
				'label' => __( 'Space Bottom', 'codesk-themer' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 20,
				],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .gsc-image-content .box-content .title' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_content_style',
			[
				'label' => __( 'Content', 'codesk-themer' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'style' => ['style-v2', 'style-v4'],
				],
			]
		);

		$this->add_control(
			'content_color',
			[
				'label' => __( 'Text Color', 'codesk-themer' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .gsc-image-content .box-content .desc' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'typography_desc',
				'selector' => '{{WRAPPER}} .gsc-image-content .box-content .desc',
			]
		);

		$this->add_control(
			'content_space_bottom',
			[
				'label' => __( 'Space Bottom', 'codesk-themer' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'size' => 10,
				],
				'range' => [
					'px' => [
						'min' => 10,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .gsc-image-content .box-content .desc' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

	}

	/**
	 * Render heading widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */
	protected function render() {
		
      printf( '<div class="gva-element-%s gva-element">', $this->get_name() );
         include $this->get_template('gva-image-content.php');
      print '</div>';
	}

}
