
   <?php get_header(); ?>
   <section class="skills">
    <h1>Skills</h1>

    <div class="container">
    <?php
            $args = array(
                "post_type" => ["skills"],
                "posts_per_page" => 2
            );
            $query = new WP_Query($args);
            if($query->have_posts(  )){
                while($query->have_posts(  )){ $query->the_post(); ?>
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <?php 
                }
            }

            ?>
    </div>
</section>


<section class="work-exp">
    <h1>Work Experience</h1>
    <div class="container">
    <?php
            $args = array(
                "post_type" => ["work_experiences"],
                "posts_per_page" => 2
            );
            $query = new WP_Query($args);
            if($query->have_posts(  )){
                while($query->have_posts(  )){ $query->the_post(); ?>
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <?php 
                }
            }

            ?>
    </div>
</section>

<section class="work-exp">
    <h1>Blog</h1>
    <div class="container">
    <?php
            $args = array(
                "post_type" => ["post"],
                "posts_per_page" => 2
            );
            $query = new WP_Query($args);
            if($query->have_posts(  )){
                while($query->have_posts(  )){ $query->the_post(); ?>
            <div class="row">
                <div class="col-md-6">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
            <?php 
                }
            }

            ?>
    </div>
</section>
    
                
                
   
   <?php get_footer(); ?>