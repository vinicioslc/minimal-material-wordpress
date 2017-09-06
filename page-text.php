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
    <!-- CARDS  -->
    <div class="paper white">
            <div class="bread-crumbs text-grey lighten-2">
                    Vinicios Clarindo &gt; <?php     the_title();            ?>
                    
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