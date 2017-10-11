<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?=$title;?></title>       
    <!-- Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">    
    <link href="<?php echo base_url() ?>assets/css/jquery.timepicker.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/css/bootstrap-datepicker.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url() ?>assets/css/magnific-popup.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/creative.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">
    
    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/js/jQuery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scrollreveal.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-range/2.2.0/moment-range.min.js"></script>   
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.timepicker.min.js"></script>
    <script  type="text/javascript"  src="<?php echo base_url() ?>assets/js/tinymce.js"></script>
    <script  type="text/javascript">
        tinymce.init({
            selector: "textarea"
        });
    </script>
</head>

<body>
    <?php 
    $this->load->library('session');
    if(isset($this->session->id_user)) {?>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand" href="index.html">Admin Master LEC</a> -->
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">                
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator <b class="caret"></b></a>
                <ul class="dropdown-menu">                        
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo base_url(); ?>logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <?php } else { ?>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img class="logo" src="<?= base_url();?>assets/images/logo-grey.png"></a>
        <button class="navbar-toggler navbar-toggler-right visible-xs" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="fa fa-align-justify"></span>
        </button>
        <div class="collapse navbar-collapse pull-right" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tentang">Tentang LEC</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#target_level">Target Level</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#kontak">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link toggle-form" href="#daftar">Daftar Kursus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link toggle-form" href="#login">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php }?>