<?php
/*
 Template Name: Nos recettes
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

			<div id="content" class="montagneBackground">
				<div class="container_12">
					<section class="categories-f-r">
						<?php $taxonomy = 'recettes_cat';
							$tax_terms = get_terms( $taxonomy, array( 'hide_empty' => 0, 'orderby' => 'id', 'order' => DESC ) ); ?>
						<div class="text-wrapper">
							<h1>Nos Recettes RichesMonts</h1>
							<h2>Découvrez toutes nos idées recettes pour faire de vos Raclettes, </br> Fondues et Tartiflettes Party </br> des moments gourmands  à partager !</h2>
						</div>
						<div class="categorie-bloc">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/categorie-recette-1.jpg" alt="">
							<a href="<?php echo get_term_link($tax_terms[0]); ?>"><h3><?php echo $tax_terms[0]->name; ?></h3></a>
						</div>
						<div class="categorie-bloc">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/categorie-recette-2.jpg" alt="">
							<a href="<?php echo get_term_link($tax_terms[1]); ?>"><h3><?php echo $tax_terms[1]->name; ?></h3></a>
						</div>
						<div class="categorie-bloc">
							<img src="<?php echo get_template_directory_uri(); ?>/library/images/categorie-recette-3.jpg" alt="">
							<a href="<?php echo get_term_link($tax_terms[2]); ?>"><h3><?php echo $tax_terms[2]->name; ?></h3></a>
						</div>
					</section>
					<div class="clearfix"></div>

					<?php $the_query = new WP_Query( array('post_type' => 'partenaires', 'showposts' => 5) );
					if ( $the_query->have_posts() ) { ?>

					<section class="partenaires container_12">
						<div class="outer-center">
							<div class="inner-center">
								<h2>Nos partenaires :</h2>
								<?php while ( $the_query->have_posts() ) { ?>
									<?php $the_query->the_post(); ?>
									<?php $image = get_field('logo'); ?>
									<a href="<?php the_field('lien'); ?>"><img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>"></a>
								<?php } ?>
							</div>
						</div>
					</section>

					<?php } wp_reset_postdata(); ?>

					<div class="clearfix"></div>
				</div>
			</div>

<?php get_footer(); ?>