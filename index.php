<?php get_header (); ?>
        <!-- TEMPLATE INDEX -->
        <!-- CORPO  -->
        <main class="container">
        <?php 
            get_template_part( 'template', 'head-title' );
        ?>    
        <article class="container light-blue">
            <!-- CARDS  -->
            <div class="cards-container">
                <?php 
                $wpquery = new WP_Query('type=post&posts_per_page=100&category__not_in=2');
                if ($wpquery->have_posts()) 
                : while ( $wpquery->have_posts() ) 
                : $wpquery->the_post();  
                get_template_part( 'template-card', get_post_type() );     ?>
                
                <?php endwhile; else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>                
            </div>
            <!-- END CARDS -->
        </article>

<!-- END CORPO -->
<?php get_footer(); ?>