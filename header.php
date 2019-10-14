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
			'link_before'    => '',
      		'link_after'     => ''
			);

			
			function modify_home_in_nav_menu_objects( $items, $args ) {
				foreach ( $items as $k => $object ) {
					// you can also target given page using this if:
					// if ( 'page' == $object->object && 2 == $object->object_id ) {
					if ( 81 == $object->ID ) {
						$template_dir = get_template_directory_uri();
						// $object->title = '<img src="' . $template_dir . '/svg/home-minimal.svg" alt="" />';
						$object->title = '<img src="' . $template_dir . '/svg/home-minimal.svg" alt="" />';
						
					}
				}
				return $items;
			}
			add_filter( 'wp_nav_menu_objects', 'modify_home_in_nav_menu_objects', 10, 2 );

			
			wp_nav_menu( $defaults );
		?>
	</div>
</div>


