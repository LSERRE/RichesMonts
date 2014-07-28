<?php get_header(); ?>

			<div id="content" class="montagneBackground">
				<div class="container_12">
					<div id="main-slider" class="liquid-slider main-slider grid_12">
						<?php $the_query = new WP_Query( array('post_type' => 'slider', 'showposts' => 3) );
						if ( $the_query->have_posts() ) {
							while ( $the_query->have_posts() ) { ?>
								<div>
									<?php $the_query->the_post();
									$image = get_field('image'); ?>
									<img src="<?php echo $image['url']; ?>" alt="<?php the_title(); ?>">
									<div class="infos-slider">
										<h2 class="title"><?php the_title(); ?></h2>
										<h3 class="subtitle"><?php the_field('sous_titre'); ?></h3>
										<?php if(get_field( "texte_lien" )){ ?>
											<a href="<?php the_field('lien'); ?>" title="<?php the_title(); ?>"><?php the_field('texte_lien'); ?></a>
										<?php } ?>
									</div>
									<div class="clear"></div>
								</div>
							<?php }
						}
						wp_reset_postdata(); ?>
					</div>
					<div class="clearfix"></div>

					<div id="inner-content">
						<div id="main" role="main">
							<?php $the_query = new WP_Query( array('post_type' => 'accueil-bloc-info', 'showposts' => 3) );
							if ( $the_query->have_posts() ) { ?>
								<section class="info-blocks m-all">
								<?php $i = 0;
								while ( $the_query->have_posts() ) { ?>
									<?php $the_query->the_post(); ?>

										<article class="grid_4 <?php if($i==0){ echo 'alpha'; } elseif($i==2){ echo 'omega'; } ?>">
											<header>
												<?php if(get_field( "lien_texte" )){ ?>
													<div class="image-wrapper">
														<?php $image = get_field('icon'); ?>
														<img src="<?php echo $image['url'] ?>" alt="">
													</div>
												<?php } ?>
												<h3><?php the_title(); ?></h3>
											</header>
											<div>
												<?php $image = get_field('image_fond'); ?>
												<img src="<?php echo $image['url'] ?>" alt="<?php the_title(); ?>">
												<?php if(get_field( "lien_texte" )){ ?>
													<a href="<?php the_field('url'); ?>"><?php the_field('lien_texte'); ?></a>
												<?php } ?>
											</div>
										</article>

								<?php $i = $i + 1;
								} ?>
								</section>
							<?php } wp_reset_postdata(); ?>
							<div class="clearfix"></div>

							<?php if (have_posts()) : ?>

								<section class="a-la-une m-all grid_12">
									<h2>A la une!</h2>

									<?php while (have_posts()) : the_post(); ?>

										<article id="post-<?php the_ID(); ?>" class="grid_4 push_4" role="article">
											<header>
												<div class="image-wrapper">
													<img src="<?php echo get_template_directory_uri(); ?>/library/images/article-small.png" alt="">
												</div>
												<h3><?php the_title(); ?></h3>
											</header>
											<div>
												<?php the_post_thumbnail( 'richesmonts-365' ); ?>
												<a href="<?php the_permalink(); ?>">Lire la suite</a>
												<div class="clearfix"></div>
											</div>
										</article>

										<div class="clearfix"></div>

									<?php endwhile; ?>
								</section>
							<?php endif;
							wp_reset_postdata(); ?>

							<div class="clearfix"></div>

							<?php $the_query = new WP_Query( array('post_type' => 'partenaires', 'showposts' => 5) );
							if ( $the_query->have_posts() ) { ?>
								<section class="partenaires grid_12">
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
				</div>
			</div>

<?php get_footer(); ?>
