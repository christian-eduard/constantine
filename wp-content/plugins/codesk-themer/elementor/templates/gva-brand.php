<?php
   if (!defined('ABSPATH')) {
      exit; // Exit if accessed directly.
   }

   use Elementor\Group_Control_Image_Size;
   $style = $settings['style'];
   $this->add_render_attribute('wrapper', 'class', ['gva-brand-carousel' , $style ]);
   $this->add_render_attribute('carousel', 'class', ['init-carousel-owl owl-carousel']);
?>
<?php if($style == 'style-1'): ?>
   <div <?php echo $this->get_render_attribute_string('wrapper'); ?>>
      <div <?php echo $this->get_render_attribute_string('carousel') ?> <?php echo $this->get_carousel_settings() ?>>
         <?php
         $i = 0;
         $html_tag = 'span';
         foreach ($settings['brands'] as $brand): ?>
            <?php 
               $i ++;
               $html_tag = 'span';
               if ( ! empty( $brand['link']['url'] ) ) {
                  $this->add_render_attribute( 'link_' .$i, 'href', $brand['link']['url'] );
                  $html_tag = 'a';
                  if ( $brand['link']['is_external'] ) {
                     $this->add_render_attribute( 'link_' .$i, 'target', '_blank' );
                  }
                  if ( $brand['link']['nofollow'] ) {
                     $this->add_render_attribute( 'link_' .$i, 'rel', 'nofollow' );
                  }
               }
            ?>
            <?php if( $i % 2 == 1 ){ echo '<div class="item brand-item">'; } ?>
               <div class="brand-item-content">
                  <<?php echo $html_tag ?> <?php echo $this->get_render_attribute_string( 'link_' .$i ) ?>>
                  <?php
                     $image_html = Group_Control_Image_Size::get_attachment_image_html($brand, 'image');
                     echo $image_html;
                  ?>
                  </<?php echo $html_tag ?>>
               </div>

            <?php if( $i % 2 == 0 || $i == count($settings['brands']) ){ echo '</div>'; } ?>
         <?php endforeach; ?>
      </div>
   </div>
<?php endif; ?>

<?php if($style == 'style-2'): ?>
   <div <?php echo $this->get_render_attribute_string('wrapper'); ?>>
      <div <?php echo $this->get_render_attribute_string('carousel') ?> <?php echo $this->get_carousel_settings() ?>>
         <?php
         $i = 0;
         $html_tag = 'span';
         foreach ($settings['brands'] as $brand): ?>
            <?php 
               $i ++;
               $html_tag = 'span';
               if ( ! empty( $brand['link']['url'] ) ) {
                  $this->add_render_attribute( 'link_' .$i, 'href', $brand['link']['url'] );
                  $html_tag = 'a';
                  if ( $brand['link']['is_external'] ) {
                     $this->add_render_attribute( 'link_' .$i, 'target', '_blank' );
                  }
                  if ( $brand['link']['nofollow'] ) {
                     $this->add_render_attribute( 'link_' .$i, 'rel', 'nofollow' );
                  }
               }
            ?>
            <div class="item brand-item">

               <div class="brand-item-content">
                  <<?php echo $html_tag ?> <?php echo $this->get_render_attribute_string( 'link_' .$i ) ?>>
                     <?php
                        $image_html = Group_Control_Image_Size::get_attachment_image_html($brand, 'image');
                        echo $image_html;
                     ?>
                  </<?php echo $html_tag ?>>   
               </div>
              
            </div>
         <?php endforeach; ?>
      </div>
   </div
<?php endif; ?>