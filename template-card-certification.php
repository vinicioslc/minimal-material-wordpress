<!-- TEMPLATE GALLERY -->
<div class="portifolio-card scroll-animation" style="max-width: 400px">
    <div onclick="openPage('<?php the_permalink(); ?>');" class="card-content">
        <div class="card-description linear-gradient">
            <h2 class="card-title text-white">
                <?php
                the_title();
                ?>
            </h2>
            <h3 class="card-category text-white">                
                <?php the_tags( 'Habilidades: ', ', ' ,'. '); ?>                
            </h3>
            <div class="card-excerpt text-white">
                <?php 
                the_excerpt();
                ?>
            </div>
        </div>
        <div 
        style="background: url('<?php the_post_thumbnail_url(); ?>');" 
        class="img-portifolio effect-hover-pan"
        ></div>
    </div>
</div>
<!-- END TEMPLATE GALLERY -->