<html>
    <head>
        <title>El Heba Theme</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <?php 
  wp_nav_menu( array(
    "theme_location"=>"top-nav",
    "menu_class"=>"navbar-nav mr-auto",
    "container_class"=>"my collapse navbar-collapse",
    "container_id"=>"navbarSupportedContent",
    "add_li_class"=>"nav-item"
));
                          
                          
   ?>
</nav>
</header>