<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Operator</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/js/jQuery/jQuery-2.1.4.min.js"></script>

    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link href="<?php echo base_url() ?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url() ?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">    

    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" type="text/css">

    <link href="<?php echo base_url() ?>assets/css/style-daftar.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/js/plugin/datetimepicker/bootstrap-datetimepicker.css">

    <!-- tinymce -->
    <script  type="text/javascript"  src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
    <script  type="text/javascript">
            tinymce.init({
            selector: "textarea"
            });
    </script>

    <!-- Auto Complete Search  -->
    <link href="<?php echo base_url();?>assets/js/autocomplete/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/autocomplete/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/autocomplete/jquery-ui.js"></script>
    <style>
      .ui-autocomplete {
        max-height: 100px;
        overflow-y: auto;
        overflow-x: hidden;
      }
       .ui-autocomplete {
        height: 100px;
      }
      </style>

    <script type="text/javascript">
       $(document).ready(function(){
      $('#nama_pekerja').autocomplete(
       {
        source : "<?php echo site_url('kel_assesment/search_pekerja/?');?>"   }
      );
     });
    </script>
    <!--End Autocomplete Search  -->

</head>

<body>

    <div id="wrapper">

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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Operator <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url(); ?>login"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>