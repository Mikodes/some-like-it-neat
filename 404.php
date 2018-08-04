<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Some_Like_It_Neat
 * @author  Alex Vasquez <alex@digisavvy.com>
 * @license GPL-2.0+ https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html
 * @link    https://github.com/digisavvy/some-like-it-neat
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">
		<?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'some-like-it-neat' ); ?>
				</h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p>
		<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'some-like-it-neat' ); ?>
				</p>

				<?php get_search_form(); ?>

				<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

				<?php if ( some_like_it_neat_categorized_blog() ) : ?>

			<div class="widget widget_categories">
				<h2 class="widgettitle">
		<?php esc_html_e( 'Most Used Categories', 'some-like-it-neat' ); ?>
				</h2>
				<ul>
		<?php
			wp_list_categories(
				array(
					'orderby'    => 'count',
					'order'      => 'DESC',
					'show_count' => 1,
					'title_li'   => '',
					'number'     => 10,
				)
			);
		?>
				</ul>
			</div><!-- .widget -->
				<?php endif; ?>

	<?php
	/* translators: %1$s: smiley */
	$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'some-like-it-neat' ), convert_smilies( ':)' ) ) . '</p>';
	the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
	?>

	<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</div><!-- #primary -->

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
