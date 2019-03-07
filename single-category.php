<?php
/**
 * The template for displaying all single events.
 *
 * @package eventosybodas
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();
$container   = get_theme_mod( 'eventosybodas_container_type' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">
      <div class="col-md-12 content-area" id="primary">

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'loop-templates/content', 'category' ); ?>

						<?php eventosybodas_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

      </main><!-- #main -->
    </div>
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>