<!-- START template-paper-header-color -->
<?php 
    // This thing get the paper-header color
    $postCustom = get_post_custom();
    $paperHeaderColor = $postCustom['paper-header-color'][0];
?>

<div class="paper-header light-blue" 
     style="background : <?= $paperHeaderColor ?>">
</div>
<!-- END template-paper-header-color -->