<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BLM
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
    /*<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
    
	</header><!-- .entry-header -->*/
        ?>

    <?php if(!is_page('home')): ?>
    
                <div class="page-banner" style="background-image:url(<?php the_field('page_banner_picture');?>);background-position:<?php the_field('horizontal_position')?> <?php the_field('vertical_position');?>;">
                <div class="page-banner-overlay">
                    <div class="banner-text" style="color:<?php the_field('text_color');?>"><?php the_field('page_banner_caption');?></div>
                </div>
            </div>
    <?php else: ?>
            <div class="home-slideshow">
            <ul class="home_slideshow_ul">
                    <?php while ( have_rows('background_picture') ) : the_row();?>
                        <li>
                            <div class="picture" style="background-image:url(<?php the_sub_field('background_picture'); ?>);background-position:<?php the_sub_field('vertical_position');?> <?php the_sub_field('horizontal_position'); ?>">
                                <div class="picture-caption">
                                    <div class="picture-title"><?php the_sub_field('title');?></div>
                                    <div class="picture-subtitle"><?php the_sub_field('subtitle');?></div>
                                </div>
                            </div>
                            </li>
                    <?php endwhile;?>
            </ul>
        </div>
    <?php endif; ?>
	<div class="entry-content">
        
        
        <?php if(is_page('home')): ?>
        

        
        <div class="home-whatwedo">
            <?php while ( have_rows('what_we_do') ) : the_row();?>
                <div class="whatwedo-item">
                    <div class="icon"><img src="<?php the_sub_field('icon');?>"></div>
                    <div class="title"><?php the_sub_field('title');?></div>
                    <div class="description"><?php the_sub_field('description');?></div>
                    <div class="link_to_page"><a href="<?php the_sub_field('link_to_page');?>">See Our Work</a></div>
                </div>
            <?php endwhile;?>
            
        </div>
        <?php else: ?>

        
        
            <?php if(is_page('who-we-are')): ?>
            <div class="pagewidth">
                <h1><?php the_field('company title');?></h1>
                <p><?php the_field('company_description');?></p>
            </div>

            <div class="pagewidth flexcontainer biocontainer">
                <?php while ( have_rows('bio') ) : the_row();?>
                    <div class="biocol">
                        <div class="bio_image"><img src="<?php the_sub_field('picture');?>"></div>
                        <div class="bio_name"><?php the_sub_field('name');?></div>
                        <div class="bio_desc"><?php the_sub_field('description');?></div>
                    </div>
                <?php endwhile; ?>
            </div>

            <?php else: ?>
        
            <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'blm-blog' ),
                    'after'  => '</div>',
                ) );
            ?>

            <?php endif; ?>
        
        
            <?php if (is_page('websites')): ?>
                <div class="portfolio-title">SHOWCASE</div>
                <div class="portfolio-container">
                    <?php while ( have_rows('portfolio') ) : the_row();?>
                    <a href="<?php the_sub_field('link');?>" class="portfolio" target="_blank">
                        <div class="portfolio_picture" style="background-image:url(<?php the_sub_field('picture');?>)"></div>
                        <div class="portfolio_overlay"></div>
                        <div class="portfolio_text"><?php the_sub_field('name');?></div>
                        
                    </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        
        
            <?php if (is_page('photography')): ?>
                <div class="portfolio-title">SHOWCASE</div>
                <div class="portfolio-container">
                    <?php while ( have_rows('portfolio') ) : the_row();?>
                    <a href="<?php the_sub_field('link');?>" class="portfolio">
                        <div class="portfolio_picture" style="background-image:url(<?php the_sub_field('picture');?>)"></div>
                        <div class="portfolio_overlay"></div>
                        <div class="portfolio_text"><?php the_sub_field('name');?></div>
                        
                    </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?> 
        
            <?php if ( is_page('videography')): ?>
                <div class="portfolio-title">SHOWCASE</div>
                <div class="portfolio-container">
                    <?php while ( have_rows('portfolio') ) : the_row();?>
                    <a href="<?php the_sub_field('link');?>" class="portfolio" data-lity>
                        <div class="portfolio_picture" style="background-image:url(<?php the_sub_field('picture');?>)"></div>
                        <div class="portfolio_overlay"></div>
                        <div class="portfolio_text"><?php the_sub_field('name');?></div>
                        
                    </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        <?php endif; ?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'blm-blog' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
