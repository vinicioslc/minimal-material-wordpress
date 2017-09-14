<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php the_title('Vinicios Clarindo - ');?></title>
    <meta name="author" content="Vinicios de Lima Clarindo">
    <meta name="description" content="Vinicios de Lima Clarindo conhecido como Vinicios Clarindo é um designer/animador/desenvolvedor front e back-end/generalista 3D, apaixonado por tecnologia e desenvolvimento e design minimalista.">
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="10"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <?php wp_head(); ?>
</head>

<body>
<div id="fademain" style="z-index: 4; opacity : 1; position : fixed; height : 100vh; width:100vw; background:white;"></div>
    <!-- MENU TOPO  -->
    <input type="checkbox" id="menuButton">
    <label class="" for="menuButton">
            <span title="Ir a página inicial" 
                  alt="Imagem de Perfil com Vinicios Clarindo">
            </span>
    </label>
    <nav for="menuButton" >
        <?php wp_nav_menu( array( 'theme_location' => 'sidebar_menu') ); ?>
    </nav>
    <!-- END MENU TOPO -->