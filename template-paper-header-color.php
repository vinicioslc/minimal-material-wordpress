<!-- START template-paper-header-color -->
<?php 
    // This thing get the paper-header color
    $postsCategory = get_post_custom();
    $headerColor = $postsCategory['paper-header-color'][0];
?>

<div class="paper-header light-blue" 
     style="background : <?= $headerColor ?>">
</div>
<!-- END template-paper-header-color -->