<?php 
/*
* Template Name: Portifolio Page
*/
    get_header();
?>
    <!-- CORPO  -->
    <main class="container">
        <?php 
            get_template_part( 'template', 'head-title' );
        ?>
        <article class="container light-blue">
            <!-- CARDS  -->
            <div class="cards-container">
                <?php 
                $wpquery = new WP_Query('type=post&posts_per_page=100&cat=2');
                if ($wpquery->have_posts()) 
                : while ( $wpquery->have_posts() ) 
                : $wpquery->the_post();                  
                get_template_part( 'template', 'gallery' );
            endwhile; else : 
                ?>
                <p><?php _e( 'Me desculpe, não pude encontrar nenhum post' ); ?></p>
                <?php endif; ?>
            </div>
            <!-- END CARDS -->
        </article>
        <!-- END CORPO -->
<?php 
    get_footer();
?>
