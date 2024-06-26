<div class="post-media post-video">
   <?php if(has_post_thumbnail()): ?>
        <img class="img-fluid" alt="<?php the_title_attribute(); ?>" src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" >
       <?php 
        if ( is_sticky() ) {
                  echo '<sup class="meta-featured-post"> <i class="fa fa-thumb-tack"></i> ' . esc_html__( 'Sticky', 'medizco' ) . ' </sup>';
           }  
           ?>

   <?php
   if( defined( 'FW' ) && medizco_meta_option(get_the_ID(),'featured_video')!=''):
   ?>
         <div class="video-link-btn">
            <a href="<?php echo medizco_meta_option(get_the_ID(),'featured_video'); ?>" class="play-btn popup-btn"><i class="icon icon-play"></i></a>
         </div>
         <?php endif; ?> 
               <?php 
                  $date_style = medizco_option('blog_date_style','classic');
                  if ( $date_style == "creative" ) :
                        medizco_post_meta_date();
                  endif;
               ?>
         <?php endif; ?>
         </div>
         <div class="post-body clearfix">
         <div class="entry-header">
           <?php medizco_post_meta(); ?>
           <h2 class="entry-title">
               <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
           </h2>
         </div>
         
          
         <div class="post-content">
            <div class="entry-content">
               <p>
                  <?php medizco_excerpt( 40, null ); ?>
               </p>
            </div>
            <?php
            if(!is_single()):
         
              printf('<div class="post-footer readmore-btn-area"><a class="readmore" href="%1$s">Continue <i class="icon icon-arrow-right"></i></a></div>',
              get_the_permalink()
                );
            endif; 
        ?>
         </div>
   <!-- Post content right-->

</div>
<!-- post-body end-->