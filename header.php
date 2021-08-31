<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title><?php bloginfo('name')?></title>
    <!-- Bootstrap core CSS -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/jquery-3.5.1.min.js"></script>
    <link href="<?php echo get_template_directory_uri();?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri();?>/assets/fontawesome/css/all.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo get_stylesheet_uri();?>" rel="stylesheet">
    <?php wp_head();?>
  </head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="#">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.png" alt="logo">
      </a>
      <button class="navbar-toggler btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="row w-100">
          <div class="col-lg-6 text-center main_nav m-auto">
              <?php 
                wp_nav_menu(
                  array(
                    'theme_location' => 'header_menu',
                    'container_class' => 'main_menu',
                    'items_wrap' => '<ul class="navbar-nav m-auto justify-center">%3$s</ul>',
                  )
                  );
              ?>   
          </div>
          <div class="col-lg-3">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Login </a>
              </li>
              <li class="nav-item my-auto">
                <a class="nav-link btn-sm btn btn-register" href="#">Register</a>
              </li>       
            </ul>  
          </div>
          <div class="col-lg-3">
            <ul class="navbar-nav m-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fa fa-phone"></i> +8801666-666666</a>
              </li>      
            </ul>
          </div>
        </div>
      </div>      
    </nav>
  </header>