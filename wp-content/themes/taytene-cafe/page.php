<?php
/**
 * Single Posts Template
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scaffolding
 */

get_header();

global $sc_layout_class;
?>

<div id="inner-content" class="container">

	<div class="row">

		<div id="main" class="col-12 clearfix" role="main">

			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

						<header class="entry-header clearfix">

							<h1 class="single-title" itemprop="headline"><?php the_title(); ?></h1>

							<?php echo scaffolding_post_meta(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

						</header>

						<section class="entry-content clearfix" itemprop="articleBody">

							<?php
							the_content();
							?>
							
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
