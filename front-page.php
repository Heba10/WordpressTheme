<?php get_header();?>
<div class="container">

<?php 

if(have_posts()):
    while(have_posts()): the_post();?>
    <div class="row">
<div class="col-md-10">
    <h2><?php the_title();?></h2>
</div>
</div>
   
    <?php
endwhile;
endif;
?>
</div>




</div>
<?php get_footer();?>