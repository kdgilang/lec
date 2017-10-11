<?php
$data['nomenu'] = true;
$this->load->view('layout/header', $data); ?>
    <nav class="navbar-mobile fixed-top">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="fa fa-align-justify"></span>
            </button>
        </div>
    </nav>
    <div class="space-md"></div>
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <?php $this->load->view('layout/side'); ?>
            <div class="col-xs-12 col-sm-9 col-md-10 right-md">
                <h1 class="page-header">
                    <small><?= $title;?></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-fw fa-dashboard"></i> <?= $title;?>
                    </li>
                </ol>
                <?php if($content != null) {
                    $this->load->view($content);
                } else {?>
                    <div class="col-xs-12 content-profile">
                        <div class="text-profile">
                            <h3>LEC BALI</h3>
                            <p>
                                LEC <i>(Link Education Center)</i> Bali adalah lembaga kursus bahasa yang utamanya menyediakan jasa kursus pemelajaran Bahasa Inggris.
                            </p>
                            <p>
                                <i class="fa fa-map-marker" aria-hidden="true"></i> Jl. Sesetan, Gang Taman Sari No. 21, Sesetan, Denpasar Selatan, Bali 80223, Indonesia.
                            </p>
                            <p>
                                <i class="fa fa-phone" aria-hidden="true"></i> +62 813-3872-5123
                            </p>
                            <p>
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i> www.lecbali.com
                            </p>
                        </div>
                        <img src="http://localhost/lec/assets/images/logo.png" width="260px;">
                    </div>
                    <div class="clearfix"></div>
                <?php } ?>
            </div>
        </div>
        <!-- /.row -->                      
    </div>
    <!-- /.container-fluid -->
<?php $this->load->view('layout/footer'); ?>
