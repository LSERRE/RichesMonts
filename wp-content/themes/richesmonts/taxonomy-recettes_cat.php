<?php
/*
 * CUSTOM POST TYPE TAXONOMY TEMPLATE
 *
 * This is the custom post type taxonomy template. If you edit the custom taxonomy name,
 * you've got to change the name of this template to reflect that name change.
 *
 * For Example, if your custom taxonomy is called "register_taxonomy('shoes')",
 * then your template name should be taxonomy-shoes.php
 *
 * For more info: http://codex.wordpress.org/Post_Type_Templates#Displaying_Custom_Taxonomies
*/
?>

<?php get_header(); ?>

			<div id="content" class="montagneBackground">
				<div class="container_12">
					<section class="categories-f-r the_categorie">
						<?php $taxonomy = 'recettes_cat';
							$tax_terms = get_terms( $taxonomy, array( 'hide_empty' => 0, 'orderby' => 'id', 'order' => DESC ) ); ?>

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

					<h1 class="collection"> Recettes <?php single_cat_title(); ?> </h1>

					<section class="post_categorie">
						<div class="articles_container">
							<?php if ( have_posts() ) : ?>
								<?php while ( have_posts() ) : the_post();?>
									<article>
										<a class="item-link" href="<?php the_permalink(); ?>">
											<div class="image-wrapper">
												<?php $image = get_field('image'); ?>
												<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
												<?php if(get_field("nouveau")): ?>
													<span>Nouveau</span>
												<?php endif; ?>
											</div>
										</a>
										<h2><?php the_title(); ?></h2>
										<?php if(get_field("phrase_daccroche")): ?>
											<h3><?php the_field('phrase_daccroche'); ?></h3>
										<?php endif; ?>
										<p><?php the_field('poids'); ?></p>
									</article>
								<?php endwhile; ?>
								<div class="clearfix"></div>
						</div>
						<?php else: ?>
							<p class="no-result"> Pas de résultat trouvé </p>
						<?php endif; ?>
					</section>

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