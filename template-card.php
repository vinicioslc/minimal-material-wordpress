<!-- TEMPLATE CARD -->
<div class="portifolio-card scroll-animation">
    <div onclick="openPage('<?php the_permalink(); ?>');" class="paper-card-content white linear-transparent-mask">
        <div class="card-description ">
            <h2 class="card-title text-grey-darken-3">
                <?php
                the_title();
                ?>
            </h2>
            <div class="card-excerpt linear-transparent-mask text-black">
                <?php 
                the_excerpt();
                ?>
            </div>
        </div>
    </div>
</div>
<!-- END TEMPLATE CARD -->