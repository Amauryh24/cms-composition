<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<div id="overlay"></div>
<div class="header-container">
	<div class="header-menu">
		<div class="header-menu-inner">
			<a class="logo-link" href="<?php get_template_directory_uri()?>">
				<div class="header-logo">
					<svg class="header-logo" xmlns="http://www.w3.org/2000/svg" width="170" height="41.864" viewBox="0 0 170 41.864">
						<g>
							<path d="M12.144,12.917a6.931,6.931,0,0,1,6.2,3.461l-2.3,1.207a4.588,4.588,0,0,0-3.9-2.253A5.284,5.284,0,0,0,6.8,20.924a5.317,5.317,0,0,0,5.336,5.593,4.634,4.634,0,0,0,3.9-2.253l2.318,1.159a7.075,7.075,0,0,1-6.221,3.509A7.936,7.936,0,0,1,4.982,24.9L10.51,41.864l29.431-9.593L35.989,20.143c.024.258.032.515.032.781A7.7,7.7,0,0,1,28.1,28.932a7.683,7.683,0,0,1-7.919-8.007A7.683,7.683,0,0,1,28.1,12.917a7.67,7.67,0,0,1,6.672,3.517L29.431,0,0,9.593,4.128,22.26a9.071,9.071,0,0,1-.1-1.336A7.8,7.8,0,0,1,12.144,12.917Z"/>
							<path d="M33.686,19.05c-3.131,0-5.126,2.39-5.126,5.593,0,3.179,2,5.593,5.126,5.593,3.114,0,5.126-2.414,5.126-5.593C38.821,21.44,36.8,19.05,33.686,19.05Z" transform="translate(-5.576 -3.719)"/>
						</g>
						<g>
							<path d="M64.209,31.524V19.565L59.477,31.516H58.318L53.562,19.565V31.516H50.85V16.04h3.831l4.225,10.631,4.2-10.631h3.831V31.524Z" transform="translate(-9.927 -3.131)" fill="#1d1d1b"/>
							<path d="M76.08,31.524V16.04H82.9a4.691,4.691,0,0,1,5.038,4.853A4.7,4.7,0,0,1,82.9,25.721H78.792v5.8H76.08Zm9.078-10.639a2.424,2.424,0,0,0-2.624-2.463H78.8v4.9h3.734A2.418,2.418,0,0,0,85.158,20.885Z" transform="translate(-14.853 -3.131)" fill="#1d1d1b"/>
							<path d="M93.96,23.727a7.919,7.919,0,1,1,15.838,0,7.919,7.919,0,1,1-15.838,0Zm13.045,0c0-3.2-2.02-5.593-5.126-5.593-3.131,0-5.126,2.39-5.126,5.593,0,3.179,2,5.593,5.126,5.593C104.985,29.321,107.005,26.906,107.005,23.727Z" transform="translate(-18.344 -3.069)" fill="#1d1d1b"/>
							<path d="M116.78,29.272l1.529-2.109a6.66,6.66,0,0,0,4.9,2.157c2.229,0,3.09-1.094,3.09-2.133,0-3.251-9.005-1.231-9.005-6.921,0-2.575,2.229-4.547,5.641-4.547a8.013,8.013,0,0,1,5.778,2.181l-1.529,2.02a6.314,6.314,0,0,0-4.507-1.787c-1.577,0-2.6.789-2.6,1.923,0,2.905,9.005,1.111,9.005,6.873,0,2.575-1.835,4.8-5.988,4.8A8.464,8.464,0,0,1,116.78,29.272Z" transform="translate(-22.799 -3.069)" fill="#1d1d1b"/>
							<path d="M136.31,31.524V16.04h2.712V31.524Z" transform="translate(-26.612 -3.131)" fill="#1d1d1b"/>
							<path d="M148.382,31.524V18.43H143.69V16.04h12.1v2.39h-4.692V31.524Z" transform="translate(-28.052 -3.131)" fill="#1d1d1b"/>
							<path d="M162.73,31.524V16.04h2.712V31.524Z" transform="translate(-31.769 -3.131)" fill="#1d1d1b"/>
							<path d="M170.52,23.727a7.919,7.919,0,1,1,15.838,0,7.919,7.919,0,1,1-15.838,0Zm13.045,0c0-3.2-2.02-5.593-5.126-5.593-3.131,0-5.126,2.39-5.126,5.593,0,3.179,2,5.593,5.126,5.593C181.545,29.321,183.565,26.906,183.565,23.727Z" transform="translate(-33.29 -3.069)" fill="#1d1d1b"/>
							<path d="M205.362,31.524l-8.08-11.074V31.524H194.57V16.04h2.785l7.919,10.728V16.04h2.712V31.524Z" transform="translate(-37.986 -3.131)" fill="#1d1d1b"/>
						</g>
					</svg>
				</div>
			</a>
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
				<a class="ETtelephoneMaison"href="tel:012345678">
					<div class="telephone">
						<div class="icon">
						<svg xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 44 44"><path class="st0" d="M43.7,37.7l-6,6C37.5,43.9,37.3,44,37,44C16.6,44,0,27.4,0,7c0-0.3,0.1-0.5,0.3-0.7l6-6c0.4-0.4,1-0.4,1.4,0l10,10c0.4,0.4,0.4,1,0,1.4L12.4,17L27,31.6l5.3-5.3c0.4-0.4,1-0.4,1.4,0l10,10C44.1,36.7,44.1,37.3,43.7,37.7"></path></svg>
						</div>
					</div>
				</a>
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
</div>
<div class="res-menu">
	<?php wp_nav_menu( $defaults ); ?>
</div>

