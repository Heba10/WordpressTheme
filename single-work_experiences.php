<?php get_header();?>
<div class="container single-post">

<?php 

if(have_posts()):
     the_post();?>
    <div class="row">
<div class="col-md-10">
    <?php the_post_thumbnail("medium_large");  ?>
    <h2><?php the_title();?></h2>
   <h3> <?php echo get_field("company_name");?> </h3>
   <p> <?php echo get_field("start_date");?> </p>
   <p> <?php echo get_field("role");?> </p>
  
 
</div>
</div>
   
    <?php

endif;
?>
</div>




</div>
<?php get_footer();?>