<?php
/*
 * Template Name: Text Page
 */
get_header (); 
?>
<main class="container">

<?php 
    get_template_part( 'template', 'head-title' );
?>

<div class="paper-header light-blue"></div>
<article class="paper-container grey-lighten-1 scroll-animation">
    <!-- CARDS PAGE TEXT -->
    <div class="paper white">
            <div class="bread-crumbs text-grey lighten-2">
                    <a href="<?= index_rel_link() ?>">
                    Vinicios Clarindo &gt; 
                    </a>
                    <?php the_title(); ?>                    
            </div>
            <?php 
            if ( have_posts() ) :
                while ( have_posts() ) :
                    the_post();  
                    ?>
                <h2>
                <?php
                the_title();
                ?>
                </h2>
                <p>
                <?php 
                the_content( 'mais em', '[..]' );
                ?>
                </p>

            <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
            </div>
</article>
<!-- END CORPO -->

<?php get_footer(); ?>