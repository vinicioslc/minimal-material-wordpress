<?php get_header (); ?>
        <!-- TEMPLATE INDEX -->
        <!-- CORPO  -->
        <main class="container">
        <?php 
            get_template_part( 'template-blog', 'head-title' );
        ?>    
        <article class="container light-blue">
            <!-- CARDS  -->
            <div class="cards-container">
                <?php 
                $postsCategory = get_post_custom();
                $postCatID = $postsCategory['posts_category_id'][0];
                $wpquery = new WP_Query('type=post&posts_per_page=100&cat='.$postCatID);
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