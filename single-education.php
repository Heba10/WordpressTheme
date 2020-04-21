<?php get_header();?>
<div class="container single-post">

<?php 

if(have_posts()):
     the_post();?>
    <div class="row">
<div class="col-md-10 lg-heading">
   <p> THE EDUCATION TITLE</p> <h2><?php the_title();?></h2>
   <h3> <p> THE EDUCATION NAME</p> <?php echo get_field("eduction_name");?> </h3>
   <p> <p> THE EDUCATION START DATE</p> <?php echo get_field("start_date");?> </p>
   <p> <p> THE EDUCATION END DATE</p> <?php echo get_field("end_date");?> </p>
  
  
 
</div>
</div>
   
    <?php

endif;
?>
</div>




</div>
<?php get_footer();?>