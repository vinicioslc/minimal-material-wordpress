
<?php 
    get_template_part('template-paper', 'header-color');
?>

<article class="paper-container grey-lighten-1 scroll-animation">
<!-- CARDS PAGE TEXT -->
    <div class="paper white">
        <div class="crumbs-container">

            <div class="bread-crumbs text-grey lighten-2 text-left">
                <a href="<?= get_home_url(null, 'blog', null); ?>">
                        <?php 
                        echo bloginfo('name');
                        ?> &gt; 
                    </a>
                    <?php the_title(); ?>                    
                </div>
                <div class="date-crumbs text-grey lighten-2 text-right">
                    <a><?php 
                        the_time('l, j, F, Y');
                        ?></a>
                </div>
            </div>
            <?php 
            if (have_posts()) :
                while (have_posts()) :
                the_post();
            ?>
            <div class="content text-black">
                <h2>
                    <?php
                    the_title();
                    ?>
                </h2>
                <?php 
                the_content();
                ?>
            </div>             
        <?php
        endwhile;
        else :
        ?>
        <p>
            <?php _e('Me desculpe, nenhum post atende os critérios.'); ?>
        </p>
        <?php
        endif;
        get_template_part('template-post-comments');
        ?>  
    </div>
</article>
<!-- END CORPO -->