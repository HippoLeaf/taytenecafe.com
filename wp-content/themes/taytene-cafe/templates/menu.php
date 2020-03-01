<?php
/**
 *  Template Name: Menu Page
 *  Template Post Type: Page
 *
 *  @package: Scaffolding
 */

get_header();

global $sc_layout_class;
?>

<div id="inner-content" class="container-fluid">

	<div class="row">

		<div id="main" class="menu col-12 clearfix" role="main">

			<img id="banner" src="<?php the_field( 'banner' ) ?>">

			<h1 class="page-title"><?php the_title(); ?></h1>

			<div class="restaurant-menu">

				<?php

				if( have_rows( 'menu_page' ) ) :

					while( have_rows( 'menu_page' ) ) : the_row();

						$category = get_sub_field( 'menu_category' );

						?>

						<div class="menu-category container"> 
						
							<h2><?php echo $category; ?></h2>

							<div class="row">
						<?php

						while( have_rows( 'menu_item' ) ) : the_row();

							$item_name = get_sub_field( 'item_name' );
							$item_desc = get_sub_field( 'item_description' );
							$item_price = get_sub_field( 'item_price' );

							?>

							<div class="menu-item col-12 col-md-6">
									<div class="row">
										<div class="col-8">

											<p class="item-name"><?php echo $item_name; ?></p>
											<p class="item-desc"><?php echo $item_desc; ?></p>

										</div>

										<div class="col-4">

											<p class="item-price"><?php echo $item_price; ?></p>

										</div>
									</div>

							</div>

							<?php

						endwhile;

						?>

					</div>

						</div>

						<?php

					endwhile;

				endif;

				?>

			</div>

		</div><?php // END #main. ?>

	</div><?php // END .row. ?>

</div><?php // END #inner-content. ?>

<?php
get_footer();
