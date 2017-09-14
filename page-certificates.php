<?php
/*
 * Template Name: Certificates Page
 */
 get_header();
 ?>
     <main class="container">
        <?php 
            get_template_part( 'template', 'head-title' );
        ?>
        <!-- BODY CERTIFICATIONS -->
        <article class="container light-blue">
             <!-- CERTIFICATIONS  -->
             <div class="cards-container">
                 <?php 
                 $postsCategory = get_post_custom();
                 $postCatID = $postsCategory['posts_category_id'][0];
                 $wpquery = new WP_Query('type=post&posts_per_page=30&cat='.$postCatID.'');
                 $postCatID = "null";
                 if ($wpquery->have_posts()) 
                 : while ( $wpquery->have_posts() ) 
                 : $wpquery->the_post();                  
                 get_template_part( 'template', 'card-certification' );
                 endwhile; else : 
                 ?>
                 <p><?php _e('Me desculpe, não pude encontrar nenhum post'); ?></p>
                 <?php endif; ?>
             </div>
             <!-- END CARDS -->
         </article>
    <!-- END CERTIFICATIONS -->
 <?php get_footer();?>
 