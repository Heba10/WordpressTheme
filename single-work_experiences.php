<?php get_header();?>
<div class="container single-post">

<?php 

if(have_posts()):
     the_post();?>
    <div class="row">
<div class="col-md-10">
    <?php the_post_thumbnail("medium_large");  ?>
    <h2><p>THE TITLE</p><?php the_title();?></h2>
   <h3><p>THE COMPANY NAME</p> <?php echo get_field("company_name");?> </h3>
   <p> <p>THE START DATE</p><?php echo get_field("start_date");?> </p>
   <p><p>THE ROLE</p> <?php echo get_field("role");?> </p>
  
 
</div>
</div>
   
    <?php

endif;
?>
</div>




</div>
<?php get_footer();?>