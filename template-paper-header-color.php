<!-- START template-paper-header-color -->
<?php 
// This thing get the paper-header color
$customPostField = get_post_custom();
$headerColor = $customPostField['paper-header-color'][0];
if (strpos($headerColor, "#") == false){
    $headerColor = "#ff8888";
}
?>

<div class="paper-header light-blue" 
     style="background : <?= $headerColor ?>">
</div>
<!-- END template-paper-header-color -->