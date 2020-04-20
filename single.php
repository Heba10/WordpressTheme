<?php get_header();?>
<div class="container single-post">

<?php 

if(have_posts()):
     the_post();?>
    <div class="row">
<div class="col-md-10">
    <?php the_post_thumbnail("medium_large");  ?>
    <h2><?php the_title();?></h2>
    <p><?php the_content(); ?></p>
    <p><?php the_category(); ?></p>
</div>
</div>
   
    <?php

endif;
?>
</div>




</div>
<?php get_footer();?>