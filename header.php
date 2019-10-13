<?php wp_head(); ?>

<div class="header-menu">
	<div class="header-menu-inner">
        <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/svg/logo-full.svg" alt="" />
	    <?php $defaults = array(
			'theme_location'  => '',
			// 'menu'            => 'footer-menu',
			'container'       => '',
			'echo'            => true,
			// 'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul>%3$s</ul>',
			// 'depth'           => 2
			'link_before'    => '<span>',
      		'link_after'     => '</span>'
			);
			wp_nav_menu( $defaults );
		?>
		
	</div>
</div>


