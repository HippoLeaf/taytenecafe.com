<?php
/**
 * Front Page Template
 *
 * Latest Posts or Static Front Page Template as defined in Settings->Reading. Takes precedence over home.php.
 * Recommended usage: Static Front Page Template
 *
 * @see http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scaffolding
 */

get_header();

global $sc_layout_class;
?>

<div id="inner-content" class="container-fluid">

	<div>

		<div id="main" class="front-page clearfix" role="main">

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article">

						<header class="page-header container-fluid" style="background:url('<?php the_field( 'hero_image' ); ?>'); background-size:cover; background-position:center;">

							<div style="height:100%;" class="row justify-content-center align-items-center">
								<div id="page-header-text" class="col-12">
									<div class="horizontal-bar"></div>
										<!-- Sub text -->
										<p class="col-12"><?php the_field( 'landing_sub_text' ); ?></p>
										<!-- Main text -->
										<h1 class="col-12"><?php the_field( 'landing_main_text' ); ?> </h1>
									<div class="horizontal-bar"></div>
								</div>
								<div class="menu-cta" style="transform:translateY(-20px)">
										<a href="/menu/">Show me the menu!</a>
								</div>
							</div>
						</header>

						<section class="page-content clearfix">
							<!-- Menu Header -->
							<div class="menu-header"><?php the_field( 'menu_selections' ); ?></div>
							<!-- Menu Categories -->
							<div class="container">
								<div class="row">
								<?php
								// check if the repeater field has rows of data
								if ( have_rows( 'menu_categories' ) ) :

									// loop through the rows of data
									while ( have_rows( 'menu_categories' ) ) : the_row(); ?>
										<div class="menu-category col-sm-12 col-md-6 col-lg-4">
											<a href="#">
												<img src="<?php the_sub_field( 'menu_category_image' ); ?>">
												<div class="menu-category-text">
													<p><?php the_sub_field( 'menu_category_text' ); ?></p>
												</div>
											</a>
										</div>
										<?php
									endwhile;

								endif;

								?>
								</div>
							</div><!-- End Menu Categories -->
							<!-- Menu CTA -->
							<div id="second-menu-cta"class="menu-cta">
								<a href="/menu/">Show me the menu!</a>
							</div>
							<!-- Business info -->
							<div class="info"><?php the_field( 'location' ); ?></div>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.797260037105!2d-70.26894058450296!3d43.63157847912197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cb29e975a030179%3A0x3341b57f7f87b82a!2s863%20Broadway%2C%20South%20Portland%2C%20ME%2004106!5e0!3m2!1sen!2sus!4v1571612248379!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
						</section>

					</article>

					<?php
				endwhile;

			else :

				get_template_part( 'template-parts/error' ); // WordPress template error message.

			endif;
			?>

		</div><?php // END #main. ?>

	</div><?php // END .row. ?>

</div><?php // END #inner-content. ?>

<?php
get_footer();
