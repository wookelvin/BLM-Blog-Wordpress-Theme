<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BLM
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
        <div class="blog-posts-title">BLOG</div>
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;
            ?>
            <div class="main-blog-container">
            <?php 
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'template-parts/content', get_post_format() );
                    echo '<a href="'.esc_url( get_permalink() ).'" class="blog-link">';
                    echo '<div class="blog-item" style="background-image:url('. wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' )[0].');">';
                    echo '<div class="blog-item-overlay">';
                    echo '<div class="blog-title">'.get_the_title().'</div>';
                    echo '<div class="blog-date">'.get_the_date().'</div>';
                    $posttags = get_the_tags();
                    if ($posttags) {
                        echo '<div class="tags">';
                        $posttagcnt = 0;
                        foreach($posttags as $tag) {
                            if ($posttagcnt != 0)
                                echo ' - ';
                            echo $tag->name; 
                            
                            $posttagcnt ++;
                        }
                        echo '</div>';
                    }
                    //echo '<div class="tags">'.the_tags(""," - ","").'</div>';
                    echo '</div></div></a>';
            
            endwhile;
                ?>
            </div>
            <?php 

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
