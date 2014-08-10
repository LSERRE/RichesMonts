			<footer class="footer" role="contentinfo">
				<div id="inner-footer" class="container_12 inner-footer">
					<div class="footer-wrapper">
						<div class="centering-wrapper">
							<p class="copyright"> Copyright 2014 RichesMonts </p>

							<nav role="navigation">
								<?php wp_nav_menu(array(
		    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
		    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
		    					'menu_class' => 'nav footer-nav',            // adding custom nav class
		    					'theme_location' => 'footer-links',             // where it's located in the theme
		    					'before' => '',                                 // before the menu
			        			'after' => '',                                  // after the menu
			        			'link_before' => '',                            // before each link
			        			'link_after' => '',                             // after each link
			        			'depth' => 0,                                   // limit the depth of the nav
		    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
								)); ?>
							</nav>

							<div class="outer-center social">
								<div class="inner-center">
									<img class="quiveuxdufromage" src="<?php bloginfo('template_url'); ?>/library/images/quiveuxdufromage.png" alt="Qui veux du fromage">
									<a class="facebook" href="http://www.facebook.com">Facebook</a>
									<a class="twitter" href="http://www.twitter.com">Twitter</a>
									<a class="youtube" href="http://www.youtube.com">Youtube</a>
									<a class="pinterest" href="http://www.pinterest.com">Pinterest</a>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
					<hr class="footer-separate" />
					<div class="clearfix"></div>
					<div class="footer-wrapper">
						<div class="centering-wrapper">
							<p class="mangerbouger">« Pour votre santé, mangez au moins cinq fruits et légumes par jour » – www.mangerbouger.fr</p>
							<form action="" method="post" class="search-box">
								<p>
								<input type="search" placeholder="Recherche" name="footer_search">
								<input type="submit" value="ok">
								</p>
							</form>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
