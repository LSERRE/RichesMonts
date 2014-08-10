<?php
/*
 Template Name: Basic page
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
					<img src="<?php echo get_template_directory_uri(); ?>/library/images/banniere-top.png" alt="RichesMonts et vous">
					<section class="content-page grid_8">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; endif; ?>
					</section>
					<?php $the_query = new WP_Query( array('post_type' => 'accueil-bloc-info', 'showposts' => 3) );
					if ( $the_query->have_posts() ) { ?>
						<section class="right-panel grid_4 info-blocks m-all">
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
				</div>
			</div>

<?php get_footer(); ?>