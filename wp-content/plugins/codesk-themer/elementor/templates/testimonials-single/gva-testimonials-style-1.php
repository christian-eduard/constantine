<?php
   if (!defined('ABSPATH')) {
      exit; // Exit if accessed directly.
   }
   use Elementor\Group_Control_Image_Size;
?>
   
<?php if( $settings['style'] == 'style-1' ){ 

   $this->add_render_attribute('wrapper', 'class', ['gva-testimonial-single' , $settings['style'] ]);

   ?>
   <div <?php echo $this->get_render_attribute_string('wrapper'); ?>>
      <div class="testimonial-single-inner">
         
         <div class="tab-lists-content">
            <div class="tab-carousel-list-here slick-slider"> 
               <?php foreach ($settings['testimonials'] as $testimonial): ?>
                  <?php 
                     $background_image = ($testimonial['testimonial_background']['url']) ? $testimonial['testimonial_background']['url'] : GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg-placehoder.jpg';
                  ?>
                  <div class="testimonial-item">
                     <div class="testimonial-bg" style="background-image: url('<?php echo $background_image ?>')"></div>
                     <div class="testimonial-content">
                        <div class="icon-quote"></div>
                        <div class="testimonial-content-inner"><?php echo $testimonial['testimonial_content']; ?></div>
                        <div class="testimonial-name"><?php echo $testimonial['testimonial_name']; ?></div>
                        <?php if($testimonial['testimonial_video']){ ?>
                           <div class="testimonial-video">
                              <a class="video-link" href="<?php echo $testimonial['testimonial_video']; ?>"><i class="fa fa-play"></i></a>
                              <span class="video-title"><?php echo esc_html__('Watch Campaigns', 'codesk'); ?></span>
                           </div>   
                        <?php } ?>
                     </div>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>

         <div class="carousel-nav">
            <div class="tab-carousel-nav slick-slider">
               <?php foreach ($settings['testimonials'] as $testimonial): ?>
                  <div class="slick-slide">
                     <a class="link-service">
                       <?php 
                           $background_image = ($testimonial['testimonial_background']['url']) ? $testimonial['testimonial_image']['url'] : GAVIAS_CODESK_PLUGIN_URL . 'elementor/assets/images/testimonial-bg-placehoder.jpg';
                           $avatar = ($testimonial['testimonial_image']['url']) ? $testimonial['testimonial_image']['url'] : $background_image;
                        ?>
                        <img src="<?php echo esc_url($avatar) ?>" alt="" />
                     </a>
                  </div>
               <?php endforeach; ?>
            </div>
         </div>

      </div>
   </div>
   <?php
}