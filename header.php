<?php wp_head(); ?>
<div id="overlay"></div>
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
			// 'link_before'    => '',
      		// 'link_after'     => ''
			);

			
			// function modify_home_in_nav_menu_objects( $items, $args ) {
			// 	foreach ( $items as $k => $object ) {
			// 		// you can also target given page using this if:
			// 		// if ( 'page' == $object->object && 2 == $object->object_id ) {
			// 		if ( 81 == $object->ID ) {
			// 			$template_dir = get_template_directory_uri();
			// 			// $test = bloginfo('template_directory');
			// 			$object->title = '
			// 			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.392 16.552">
			// 			<g id="home-minimal" transform="translate(-135 -32.999)">
			// 			  <path id="Tracé_1514" data-name="Tracé 1514" class="cls-1" d="M9.674,1.181a.719.719,0,0,0-.956,0L2.242,6.938A.721.721,0,0,0,2,7.477v9.354a.72.72,0,0,0,.72.72H15.673a.72.72,0,0,0,.72-.72V7.477a.719.719,0,0,0-.242-.538Z" transform="translate(133 32)"/>
			// 			</g>
			// 		  	</svg>';
						
			// 		}
			// 		if ( 89 == $object->ID ) {
			// 			$template_dir = get_template_directory_uri();
			// 			// $object->title = '<img src="' . $template_dir . '/svg/home-minimal.svg" alt="" />';
			// 			$object->title = 'Wishlist <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
			// 			<g id="icon-wishlist" transform="translate(-584 -35)">
			// 			  <circle id="Ellipse_54" data-name="Ellipse 54" class="cls-1" cx="2" cy="2" r="2" transform="translate(584 35)"/>
			// 			  <rect id="Rectangle_68" data-name="Rectangle 68" class="cls-1" width="10" height="2" transform="translate(590 36)"/>
			// 			  <circle id="Ellipse_55" data-name="Ellipse 55" class="cls-1" cx="2" cy="2" r="2" transform="translate(584 41)"/>
			// 			  <rect id="Rectangle_69" data-name="Rectangle 69" class="cls-1" width="10" height="2" transform="translate(590 42)"/>
			// 			  <circle id="Ellipse_56" data-name="Ellipse 56" class="cls-1" cx="2" cy="2" r="2" transform="translate(584 47)"/>
			// 			  <rect id="Rectangle_70" data-name="Rectangle 70" class="cls-1" width="10" height="2" transform="translate(590 48)"/>
			// 			</g>
			// 		  </svg>';
			// 		}
			// 	}
			// 	return $items;
			// }
			// add_filter( 'wp_nav_menu_objects', 'modify_home_in_nav_menu_objects', 10, 2 );

			function add_first_and_last($items) {
				$items[1]->title = '
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.392 16.552">
				<g id="home-minimal" transform="translate(-135 -32.999)">
				  <path id="Tracé_1514" data-name="Tracé 1514" class="cls-1" d="M9.674,1.181a.719.719,0,0,0-.956,0L2.242,6.938A.721.721,0,0,0,2,7.477v9.354a.72.72,0,0,0,.72.72H15.673a.72.72,0,0,0,.72-.72V7.477a.719.719,0,0,0-.242-.538Z" transform="translate(133 32)"/>
				</g>
				  </svg>';

				$items[count($items)]->title = 'Wishlist <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16">
				<g id="icon-wishlist" transform="translate(-584 -35)">
				  <circle id="Ellipse_54" data-name="Ellipse 54" class="cls-1" cx="2" cy="2" r="2" transform="translate(584 35)"/>
				  <rect id="Rectangle_68" data-name="Rectangle 68" class="cls-1" width="10" height="2" transform="translate(590 36)"/>
				  <circle id="Ellipse_55" data-name="Ellipse 55" class="cls-1" cx="2" cy="2" r="2" transform="translate(584 41)"/>
				  <rect id="Rectangle_69" data-name="Rectangle 69" class="cls-1" width="10" height="2" transform="translate(590 42)"/>
				  <circle id="Ellipse_56" data-name="Ellipse 56" class="cls-1" cx="2" cy="2" r="2" transform="translate(584 47)"/>
				  <rect id="Rectangle_70" data-name="Rectangle 70" class="cls-1" width="10" height="2" transform="translate(590 48)"/>
				</g>
			  </svg>';
			  	$items[count($items)]->classes[] = 'wishlist';
				return $items;
			}
			add_filter('wp_nav_menu_objects', 'add_first_and_last');

			wp_nav_menu( $defaults );
		?>

		<div class="burger">
			<h5>Menu</h5>
			<div class="fix">
			<div class="lines">
				<div class="line1"></div>
				<div class="line2"></div>
				<div class="line3"></div>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="res-menu">
	<?php wp_nav_menu( $defaults ); ?>
</div>

