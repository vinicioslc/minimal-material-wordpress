<?php 
    $wpquery = new WP_Query('post_type=page&posts_per_page=1&name='.$pagename);
    if ($wpquery->have_posts()) 
            : while ( $wpquery->have_posts() ) 
                    : $wpquery->the_post();                  
                        echo (the_content( ));
    endwhile; else :?>
    <p> 
        <?= 'Me desculpe, não pude encontrar esta página.' ?> 
    </p>
<?php endif;
?>                