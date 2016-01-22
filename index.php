<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 ?>
<?php get_header(); ?>

<?php nav_breadcrumb(); ?>

<?php wp_link_pages(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class="post">
   <!-- <h2 id="post-<?php the_ID(); ?>"><?php the_title();?></h2>-->
<div class="page-header">
  <h1><?php the_title(); ?> <small><?php the_date("d.m.Y"); ?></small></h1>
</div>
    <div class="entrytext">
        <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
    </div>
    <div><p>&nbsp;</p></div>
    <div class="modification-date">
    <p class="text-right"><small>Zuletzt aktualisiert am <?php the_modified_time("d.m.Y"); ?></small></p>

    </div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
