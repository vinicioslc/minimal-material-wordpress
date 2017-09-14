<?php
/*
 * Template Name: Pagina de Texto
 */
get_header (); 
?>
<main class="container">
<!-- CABEÇALHO  -->
<section class="header-container white">
    <header class="header fade-in">
        <h2 class="h1 text-black">
            
            <?php 
            the_title('"','"');
            ?>
            
        </h2>
        <h1 class="meta text-grey"><?= get_the_modified_author()?></h1>
    </header>
</section>
<?php 
    // This thing get the paper-header color
    $postsCategory = get_post_custom();
    $headerColor = $postsCategory['paper-header-color'][0];
?>
<article class="paper-container grey-lighten-1 scroll-animation" style="background : <?= $headerColor ?>;">
    <!-- CARDS  -->
    <div class="text-white">
            <a href="">
                <div class="icon">
                    <div class="back-post-icon"></div>                  
                </div>
            </a>
                    <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post();  
                    ?>
            <div class="content text-white">
                    <?php 
                        the_content();
                    ?>
            </div>             
            <?php 
                if (comments_open()):
                    get_template_part( 'template','disqus');
                endif;    
            ?>
            <?php
                endwhile; else : ?>
            <p>
                <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
            </p>
            <?php
                endif;
            ?>
    </div>
    
</article>
<!-- END CORPO -->

<?php get_footer(); ?>