<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>CMS</title>


    <link rel="stylesheet" href="<?php echo base_url("public"); ?>/css/foundation.css" />
    <link rel="stylesheet" href="<?php echo base_url("public"); ?>/css/general_enclosed_foundicons.css" />

    <script src="<?php echo base_url("public"); ?>/js/vendor/custom.modernizr.js"></script>
    

  </head>
  <body>

    <div class="row">
      <div class="large-12 columns">

        <!-- Navigation -->

        <div class="row">
          <div class="large-12 columns">

            <nav class="top-bar">
              <ul class="title-area">
                <!-- Title Area -->
                <li class="name">
                  <h1>
                    <a href="<?php echo base_url("index.php"); ?>">
                      El Mundo SA
                    </a>
                  </h1>
                </li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
              </ul>

              <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                  <?php if($this->session->userdata('logged_user')){ ?>
                    <li class="divider"></li>
                    <li class="has-dropdown">
                      <a href="<?php echo base_url("index.php/products"); ?>">Bienvenido, Pablo Soldi</a>
                      <ul class="dropdown">
                        <li><a href="<?php echo base_url("index.php/logout"); ?>">Salir</a></li>
                      </ul>
                    </li>
                  <?php }else{ ?>  
                    <li class="divider"></li>
                    <li>
                      <a href="<?php echo base_url("index.php/login"); ?>">Ingresar</a>
                    </li>
                  <?php } ?>
                </ul>
              </section>
            </nav>
            <!-- End Top Bar -->
          </div>
        </div>

        <!-- End Navigation -->