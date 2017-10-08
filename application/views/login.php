<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login</title>

    <!-- Inlcude css bostrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- include css style -->
    <link href="<?php echo base_url() ?>assets/css/style-login.css" rel="stylesheet">

     <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">    
</head>
<body>
    <div class="col-md-12 panel panel-red panel-login">        
        <div class="panel-body">
            <?php echo form_open("login/check"); ?>
                <div class="logo">
                    <img src="<?php echo base_url() ?>assets/images/logo.png" width="200px">  
                </div>           
                <div class="form-group">  
                    <div class="input-group date" data-provide="datepicker">
                        <div class="input-group-addon">
                            <span class="fa fa-user"></span>
                        </div>
                        <input class="form-control" name="username" placeholder="Username" type="text">   
                    </div>                                   
                </div>

                <div class="form-group">                        
                    <div class="input-group date" data-provide="datepicker">
                        <div class="input-group-addon">
                            <span class="fa fa-lock"></span>
                        </div>
                         <input class="form-control" name="password" placeholder="Password" type="password">   
                    </div>                  
                </div>            
                <div class="btn-login">                                                 
                    <input type="submit" class="btn btn-primary" value="Login">
                    
                    <?php 
                        if(!empty($_GET['error'])):
                     ?>
                    <br><br>
                    <div class="alert alert-danger" style="margin-bottom: 0px; padding: 10px;">
                        Username atau Password salah !
                    </div>                    
                    <!-- <span style="color: #e01b1b;">Username atau Password salah !</span> --> 
                    <?php endif; ?>

                <?php echo form_close(); ?>
                </div>

            <!-- </form> -->
        </div>
    </div>
</body>
</html>