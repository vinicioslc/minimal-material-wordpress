<?php 
    $postsCategory = get_post_custom(get_option( 'page_for_posts' ));
    $postTitle= $postsCategory['post_title'][0];
    $wpquery = new WP_Query('post_type=page&posts_per_page=1&name='.$pagename);
    if ($wpquery->have_posts()) 
            : while ( $wpquery->have_posts() ) 
                    : $wpquery->the_post();                  
                        echo ($postTitle);
    endwhile; else :?>
    <p> 
        <?= 'Me desculpe, não pude encontrar o nome desta página .-.' ?> 
    </p>
<?php endif;
?>                