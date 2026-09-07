<?php
/**
 * Index template Mostly used for blog page.
 *
 * @package Hello Theme
 */

get_header();
?>

<main id="primary" class="site-main">
    <section class="index-page-body">

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope 
                itemtype="https://schema.org/Article">

            <div class="post-content">
				<header class="excerpt-header">
                    
                    <?php the_title(
                        sprintf( '<h2 class="post-title h4"><a href="%s" rel="bookmark">', 
                            esc_attr( esc_url( get_permalink() ) ) 
                            ), '</a></h2>' ); ?>

                </header>
					<span class="excerpt-post">
                            
                        <?php the_excerpt(); ?>
                        
                    </span>
			</div>
		</article>

		<?php 
        endwhile; ?>
			<?php 
			endif; ?>

	</section>
	        <aside class="blog-sidebar">
		
	            <?php get_sidebar(); ?>

	        </aside>
</main>