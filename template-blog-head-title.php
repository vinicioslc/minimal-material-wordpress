<!-- CABEÇALHO  -->
<section class="header-container white">
    <header class="header fade-in">
        <h2 class="h1">
        <?php 
        get_template_part( 'header-blog', 'name' );
        ?>       
        </h2>
        <h1 class="meta text-grey">
        <?php echo('"'); the_author(); echo('"'); ?>
        </h1>
    </header>
</section>
<!-- END CABEÇALHO -->