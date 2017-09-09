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
    get_template_part( 'template-post', get_post_format( ) );
?>

<!-- END CORPO -->

<?php get_footer(); ?>