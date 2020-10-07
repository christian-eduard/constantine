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

class GVAElement_Locations_Map extends GVAElement_Base{

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
        return 'gva-locations_map';
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
        return __('GVA Locations Map', 'codesk-themer');
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
        return 'eicon-google-maps';
    }

    public function get_keywords() {
        return [ 'locations', 'content', 'map' ];
    }

    public function get_script_depends() {
      return [
         'gmap3',
         'google-maps-api',
         'map-ui',
      ];
    }

    public function get_style_depends() {
        return [];
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
            'section_locations',
            [
                'label' => __('Locations Content', 'codesk-themer'),
            ]
        );
       
        $this->add_control(
            'locations',
            [
                'label'       => __('Location Content Item', 'codesk-themer'),
                'type'        => Controls_Manager::REPEATER,
                'fields'      => [
                    [
                        'name'    => 'title',
                        'label'   => __('Location Title', 'codesk-themer'),
                        'default' => 'New York',
                        'type'    => Controls_Manager::TEXT,
                        'label_block' => true
                    ],
                    [
                        'name'        => 'content',
                        'label'       => __('Content', 'codesk-themer'),
                        'type'        => Controls_Manager::TEXTAREA,
                        'placeholder' => '',
                    ],
                    [
                        'name'    => 'location_map',
                        'label'   => __('Latitude, Longitude', 'codesk-themer'),
                        'default' => '36.20485484481565,-115.20025440468748',
                        'type'    => Controls_Manager::TEXT,
                        'label_block' => true,
                        'description' => esc_html__( 'Latitude, Longitude for Map, eg: 21.0173222,105.78405279999993', 'codesk-themer' )
                    ],
                    [
                        'name'        => 'image',
                        'label'       => __('Choose Image', 'codesk-themer'),
                        'type'        => Controls_Manager::MEDIA,
                        'default' => [
                            'url' => Elementor\Utils::get_placeholder_image_src(),
                        ],
                    ],
                    [
                        'name'        => 'address',
                        'label'       => __('Address', 'codesk-themer'),
                        'type'        => Controls_Manager::TEXT,
                        'placeholder' => '',
                        'label_block' => true,
                    ],
                    [
                        'name'        => 'link',
                        'label'       => __('Link', 'codesk-themer'),
                        'type'        => Controls_Manager::URL,
                    ],
                ],
                'title_field' => '{{{ title }}}',
                'default'     => array(
                    array(
                        'title'         => esc_html__( 'Singapore Office', 'codesk-themer' ),
                        'content'       => 'Find all the entertainment you need for all ages on this island, where the fun doesn not cease and boredom retreats.',
                        'location_map'  => '36.20485484481565,-115.20025440468748',
                        'address'   => esc_html__( 'Bugis Junction Towers Singapore 188024', 'codesk-themer' )
                    ),
                    array(
                        'title'         => esc_html__( 'Paris Office', 'codesk-themer' ),
                        'content'       => 'Find all the entertainment you need for all ages on this island, where the fun doesn not cease and boredom retreats.',
                        'location_map'  => '36.14346850708669, -115.1650638224121',
                        'address'   => esc_html__( 'Office du Tourisme et des Congrès de Paris', 'codesk-themer' )
                    ),
                   array(
                        'title'         => esc_html__( 'New York Office', 'codesk-themer' ),
                        'content'       => 'Find all the entertainment you need for all ages on this island, where the fun doesn not cease and boredom retreats.',
                        'location_map'  => '36.100622034574165,-115.13605304970702',
                        'address'   => esc_html__( '2 Queen Street,California, USA', 'codesk-themer' )
                    ),
                ),
            ]
        );

        $this->end_controls_section();
        
        $this->add_control_grid();

        // Style Box
        $this->start_controls_section(
            'section_style_box',
            [
                'label' => __('Box', 'codesk-themer'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'box_background',
            [
                'label'     => __('Box Background', 'codesk-themer'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .gva-locations-map .makers' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

        // Style Title
        $this->start_controls_section(
            'section_style_title',
            [
                'label' => __('Title', 'codesk-themer'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'title_color',
            [
                'label'     => __('Text Color', 'codesk-themer'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .gva-locations-map .makers .location-item .maker-item-inner .right .location-title' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'title_typography',
                'scheme'   => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .gva-locations-map .makers .location-item .maker-item-inner .right .location-title',
            ]
        );

        $this->end_controls_section();

        // Style Content
        $this->start_controls_section(
            'section_style_content',
            [
                'label' => __('Content', 'codesk-themer'),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'content_color',
            [
                'label'     => __('Text Color', 'codesk-themer'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
                'selectors' => [
                    '{{WRAPPER}} .gva-locations-map .makers .location-item .maker-item-inner .location-body' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name'     => 'content_typography',
                'scheme'   => Scheme_Typography::TYPOGRAPHY_3,
                'selector' => '{{WRAPPER}} .gva-locations-map .makers .location-item .maker-item-inner .location-body',
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
        include $this->get_template('gva-locations-map.php');
      print '</div>';
    }

}
