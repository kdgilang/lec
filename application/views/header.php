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
    <link href="<?= base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/custom.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css"/>    
    <link href="<?= base_url('assets/css/jquery.timepicker.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/bootstrap-datepicker.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/magnific-popup.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/creative.min.css'); ?>" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css"/>
    
    <!-- jQuery -->
    <script src="<?= base_url('assets/js/jQuery-2.1.4.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/scrollreveal.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.magnific-popup.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/moment.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/moment-range.min.js'); ?>"></script>   
    <script src="<?= base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.timepicker.min.js'); ?>"></script>
</head>
<body>
<?php $this->load->library('session'); ?>
<?php if(isset($nomenu) == false) {?>
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
            <?php if(!isset($this->session->id_user)) {?>
            <li class="nav-item">
              <a class="nav-link toggle-form" href="#daftar">Daftar Kursus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link toggle-form" href="#login">Login</a>
            </li>
            <?php } ?>
            <?php if(isset($this->session->id_user)) {?>
            <li class="dropdown nav-item users">
                <a href="javascript:;" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $this->session->username; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link toggle-form" href="<?php echo base_url(); ?>dashboard"><i class="fa fa-tachometer"></i> Dashboard</a>
                    </li>
                    <li>
                        <a class="nav-link toggle-form" href="<?php echo base_url(); ?>home/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </nav>
    <script>
        // Collapse the navbar when page is scrolled
        $(window).scroll(function() {
            if ($("#mainNav").offset().top > 100) {
              $("#mainNav").addClass("navbar-shrink");
            } else {
              $("#mainNav").removeClass("navbar-shrink");
            }
        });
    </script>
<?php } ?>