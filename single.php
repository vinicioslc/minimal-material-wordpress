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
        <h1 class="meta text-grey">Por :
        <?php 
        echo get_the_modified_author();
        ?>
        </h1>
    </header>
</section>
<div class="paper-header cyan-lighten-3"></div>
<article class="paper-container grey-lighten-1 scroll-animation">
    <!-- CARDS  -->
    <div class="paper white">
            <div class="bread-crumbs text-grey lighten-2">
                    Vinicios Clarindo &gt; 
                    <?php 
                    the_title();
                    ?>                    
            </div>
                    <?php 
                        if ( have_posts() ) : while ( have_posts() ) : the_post();  
                    ?>
            <div class="content">
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