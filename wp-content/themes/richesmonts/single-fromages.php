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
						<?php $taxonomy = 'fromages_cat';
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

					<?php global $post; $terms = get_the_terms( $post->ID , 'fromages_cat' );
					if ( $terms != null ){ ?>
						<section class="post_categorie other_same_post">
							<a class="next-products" href=""></a>
							<div class="other_same_post_hidder">
								<div class="other_same_post_wrapper">
									<?php foreach( $terms as $term ) { ?>
										<?php $args = array(
										    'post_type'=> 'fromages',
										    'areas'    => $term->slug,
										    'order'    => 'ASC'
										    );

										$the_query = new WP_Query( $args );
										if($the_query->have_posts() ) :
											while ( $the_query->have_posts() ) :
												$the_query->the_post(); ?>
												<article class="other_same_post_article">
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
										<?php endif; ?>
										<?php unset($term); ?>
									<?php } ?>
								</div>
							</div>
						</section>
					<?php } ?>

					<section class="the_post_detail">
						<?php if ( have_posts() ) : the_post(); ?>
							<div class="image-wrapper">
								<?php $image = get_field('big_image'); ?>
								<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
							</div>
							<div class="description">
								<h1><?php the_title(); ?></h2>
								<h2><?php if(get_field('phrase_daccroche')): ?> <span class="accroche"> <?php the_field('phrase_daccroche'); ?> </span>  <?php endif; ?> <?php the_field('poids'); ?></h2>
								<div class="content">
									<?php the_content(); ?>
								</div>
								<?php if(get_field('autres_formats')): ?>
									<div class="other-products">
										<h4>Existe aussi dans les formats suivants :</h4>
										<?php foreach( get_field('autres_formats') as $item ) { ?>
											<a href="<?php echo $item->guid; ?>">
												<div class="other-format-image-wrapper">
													<?php $image = get_field('image', $item->ID); ?>
													<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
												</div>
											</a>
										<?php } ?>
										<div class="clearfix"></div>
									</div>
								<?php endif; ?>
							</div>
							<div class="clearfix"></div>
						<?php else: ?>
							<p class="no-result"> Pas de résultat trouvé </p>
						<?php endif; ?>
						<div class="clearfix"></div>
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