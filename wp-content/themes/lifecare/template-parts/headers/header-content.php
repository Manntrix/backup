<?php
   $class = '';
   $title = 'On Social:';
   $social_title = '';
   if ( defined( 'FW' ) ) { 
      //Page settings
      $default_class = '';
   } else {
      $noquota = '';
      $default_class = 'header_default';
   }  

?>

<header id="header" class="header header-standard <?php echo esc_attr( $default_class); ?>">
      <div class="header-wrapper">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light">
                        <!-- logo-->
                     <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php 
                           echo esc_url(
                              medizco_src(
                                 'general_main_logo',
                                 MEDIZCO_IMG . '/logo/logo.png'
                              )
                           );
                        ?>" alt="<?php bloginfo('name'); ?>">
                     </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                           data-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false"
                           aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"><i class="icon icon-menu"></i></span>
                     </button>
                     
                     <?php get_template_part( 'template-parts/navigations/nav', 'primary' ); ?>
               </nav>
            </div><!-- container end-->
   </div><!-- header wrapper end-->
</header>

