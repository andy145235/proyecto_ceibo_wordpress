<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Bakers Lite
 */
if ( is_active_sidebar( 'fc-1' ) || is_active_sidebar( 'fc-2' ) || is_active_sidebar( 'fc-3' ) ) : 
?>
<div id="footer-wrapper">
		<div class="footerarea">
    	<div class="container footer">
            <?php if ( is_active_sidebar( 'fc-1' ) ) : ?>
            <div class="cols-3 widget-column-1">  
              <?php dynamic_sidebar( 'fc-1' ); ?>
            </div><!--end .widget-column-1-->                  
    		<?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-2' ) ) : ?>
            <div class="cols-3 widget-column-2">  
            <?php dynamic_sidebar( 'fc-2' ); ?>
            </div><!--end .widget-column-2-->
            <?php endif; ?> 
			<?php if ( is_active_sidebar( 'fc-3' ) ) : ?>    
            <div class="cols-3 widget-column-3">  
            <?php dynamic_sidebar( 'fc-3' ); ?>
            </div><!--end .widget-column-3-->
			<?php endif; ?> 
            <div class="clear"></div>
        </div><!--end .container--> 
        </div><!--end .footer-wrapper-->
         <?php endif; ?>
         <div id="copyright-area">
         <div class="copyright-wrapper">
        	<div class="container">
           		 <div class="copyright-txt"><?php bloginfo('name'); ?> <?php esc_html_e('Theme By ','bakers-lite');?><?php if( is_home() && is_front_page()) {?>
        <a href="<?php echo esc_url('https://www.sktthemes.org/');?>" target="_blank"><?php esc_html_e('SKT Themes','bakers-lite'); ?></a>
        <?php } else {?>
          <?php esc_html_e('SKT Themes','bakers-lite'); ?>
        <?php } ?></div>
            	 <div class="design-by">
                 	<?php
						$fb_link = get_theme_mod('fb_link'); 
						$twitt_link = get_theme_mod('twitt_link');
						$insta_link = get_theme_mod('insta_link');
						$linked_link = get_theme_mod('linked_link');
					?>
                    	<div class="social-icons">
							<?php 
                            if (!empty($fb_link)) { ?>
                            <a title="<?php echo esc_attr__('facebook','bakers-lite'); ?>" class="fb" target="_blank" href="<?php echo esc_url($fb_link); ?>"></a> 
                            <?php } 		
                            if (!empty($twitt_link)) { ?>
                            <a title="<?php echo esc_attr__('twitter','bakers-lite'); ?>" class="tw" target="_blank" href="<?php echo esc_url($twitt_link); ?>"></a>
                            <?php } 
                            if (!empty($insta_link)) { ?>
                            <a title="<?php echo esc_attr__('instagram','bakers-lite'); ?>" class="gp" target="_blank" href="<?php echo esc_url($insta_link); ?>"></a>
                            <?php } 
                             if (!empty($linked_link)) { ?> 
                            <a title="<?php echo esc_attr__('linkedin','bakers-lite'); ?>" class="in" target="_blank" href="<?php echo esc_url($linked_link); ?>"></a>
                            <?php } ?>                   
                        </div>
                 </div>
                 <div class="clear"></div>
            </div>           
        </div>
    </div><!--end .footer-wrapper-->
<?php wp_footer(); ?>
</body>
</html>