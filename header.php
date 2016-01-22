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
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
  <head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Gerd Rönsch</title>

    <!-- Bootstrap -->
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,700italic,400italic' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,700italic,400italic' rel='stylesheet' type='text/css'>   
    
    <?php wp_head(); ?>
  </head>
  <body>
	<div class="container" id="container">
		<div class="row main">
			<div class="col-lg-3 col-md-3 left-navigation">
			     <div class="portrait hidden-xs hidden-sm"><div class="photo-box">
				<img class="hidden-xs hidden-sm img-bordered photo" src="<?php bloginfo('template_directory'); ?>/images/me.jpg" alt="Profilfoto Gerd Rönsch" />
			     </div>
<p>&nbsp;</p>
<p>
<span class="name">Gerd Rönsch</span><br />
<span class="job">Fachinformatiker Fachrichtung Softwarentwicklung</span><br />
<!--<span class="company">Gauß-Allianz e.V.</span><br />-->
</div>
                <h3>Navigation</h3>
                <?php wp_nav_menu(); ?>
                <p>&nbsp;</p>
				<h3>Artikel Kategorien</h3>
                <?php
                    $args=array(
                        'orderby' => 'count',
                        'order' => 'DESC',
                        'show_count' => true,
                        'title_li' => '',
                        'number' => 6
                    );

                    $categories = get_categories($args);

                    $output =  '<div class="menu">';
                    $output .= '<ul>'; 
                    foreach($categories as $category) {
                        $output .= '<li>';
                        $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        $output .= '</li>';
                    }    
                    $output .= '</ul>';
                    $output .= '</div>';

                    print( $output );
                ?>
                
                <?php wp_meta(); ?>
			</div>
			
			<div class="col-lg-9 col-md-9 main-text">
