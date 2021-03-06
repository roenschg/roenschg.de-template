<?php
/**
 * The template for displaying Category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

<?php nav_breadcrumb(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="archive-header">
					<h2 class="archive-title"><?php printf( '%s', single_cat_title( '', false ) ); ?></h2>

					<?php if ( category_description() ) : // Show an optional category description ?>
						<div class="archive-meta"><?php echo category_description(); ?></div>
					<?php endif; ?>
				</header><!-- .archive-header -->
				<p>&nbsp;</p>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
                    <div class="media">
                        <div class="media-left">
                            <a href="<?php echo get_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail', array('class' => "media-object")); ?>
                            </a>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading"><?php the_title(); ?></h4>
                            <p<<?php the_excerpt(); ?></p>
                            <p><a href="<?php echo get_permalink(); ?>">Mehr lesen</a></p>
                        </div>
                    </div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
