<?php 
/*
* Template Name: Portifolio Page
*/
    get_header();
?>
    <!-- CORPO PORTIFOLIO -->
    <main class="container">
        <?php get_template_part( 'template', 'head-title' );?>
        <!-- CARDS  -->
        <article class="container light-blue">
            <div class="cards-container">
                <?php 
                    $postFields = get_post_custom();
                    $postCustomCategory = $postFields['posts_category_id'][0];
                    $wpquery = new WP_Query('type=post&posts_per_page=100&cat='.$postCustomCategory .'');
                    if ($wpquery->have_posts()) 
                        : while ( $wpquery->have_posts() ) 
                            : $wpquery->the_post();        
                    get_template_part( 'template-card', 'project' );
                    endwhile; else : 
                ?>
                <p>
                <?php 
                    _e( 'Me desculpe, não pude encontrar nenhum post' ); 
                ?>
                </p>
                <?php endif; ?>
            </div>
        </article>
        <!-- END CARDS -->
        <!-- END CORPO -->
<?php 
    get_footer();
?>
