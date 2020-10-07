<?php
   if (!defined('ABSPATH')) {
      exit; // Exit if accessed directly.
   }
   use Elementor\Icons_Manager;

   $this->add_render_attribute('wrapper', 'class', ['gsc-icon-box-carousel', $settings['style']]);
   $this->add_render_attribute('carousel', 'class', ['init-carousel-owl owl-carousel']);
   $style = $settings['style'];
?>

<div <?php echo $this->get_render_attribute_string('wrapper'); ?>>
   <div <?php echo $this->get_render_attribute_string('carousel') ?> <?php echo $this->get_carousel_settings() ?>>
      <?php
      foreach ($settings['icon_boxs'] as $item): 
         $has_icon = ! empty( $item['selected_icon']['value']);
      ?>
         <div class="item icon-box-item">
            
            <div class="icon-box-item-content elementor-repeater-item-<?php echo esc_attr($item['_id']) ?>">
               <div class="icon-box-item-inner">
                  
                     <?php if ( $has_icon ){ ?>
                        <div class="icon-inner">
                           <?php if ( $has_icon ){ ?>
                              <?php $this->gva_render_link_begin($item['link']); ?>
                                 <span class="box-icon">
                                    <?php Icons_Manager::render_icon( $item['selected_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                 </span>
                              <?php $this->gva_render_link_end($item['link']); ?>
                           <?php } ?>
                        </div>
                     <?php } ?>

                        <?php if($item['title']){ ?>
                           <h3 class="title">
                              <?php $this->gva_render_link_begin($item['link']); ?>
                                 <?php echo $item['title'] ?>
                              <?php $this->gva_render_link_end($item['link']); ?>
                           </h3>
                        <?php } ?>

                     <div class="content-inner">
                        <?php if($item['desc']){ ?>
                           <div class="desc"><?php echo $item['desc'] ?></div>
                        <?php } ?>
                     </div>

               </div>
               <?php 
                  $this->gva_render_link_html('', $item['link'], 'link-overlay');
               ?>
            </div>
         </div>
      <?php endforeach; ?>
   </div>
</div>
