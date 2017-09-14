
<?php 
    if (comments_open()):
?>
    <div id="comments" class="comments-area">
        <h2 class="text-grey-darken-3"><?php  _e("Comments")?></h2>
        <hr>
        <?php 
                get_template_part( 'template','disqus');
        ?>
    <div>
<?php
    endif;
?>