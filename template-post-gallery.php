<?php 
    // This thing get the paper-header color
$customPostField = get_post_custom();
$headerColor = $customPostField['paper-header-color'][0];
?>

<div class="paper-gallery-bg" style="background : <?= $headerColor ?>;">
    <article class="paper-container grey-lighten-1 scroll-animation text-white">
    <!-- CARDS  -->
            <a href="<?php echo (get_home_url() . '/' . the_category()); ?>">
                <div class="icon">
                    <div class="back-post-icon"></div>                  
                </div>
            </a>
                <?php 
                if (have_posts()) : while (have_posts()) : the_post();
                ?>  
            <div class="content text-white">
                <?php 
                the_content();
                ?>
            </div>                         
            <?php 
            get_template('template-post-comments');
            endwhile; else :
            ?>
            <p>
                <?php _e('Me desculpe, nenhum post foi achado.'); ?>
            </p>
            <?php
            endif;
            ?>   
    </article>
</div>    