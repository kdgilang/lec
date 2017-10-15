            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Cetak Sertifikat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-certificate icon-menu" aria-hidden="true"></i> Cetak Sertifikat
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->               
                
                    <div class="nama_sertifikat"><?php echo $sertifikat['nama_siswa'] ?></div>    
                    <div class="target_level"><?php echo $sertifikat['target_level'] ?></div> 
                    <div class="tgl"><?php echo $sertifikat['tgl_terbit'] ?></div>

                    <div class="pengajar">
                        <div class="nama_pengajar"><?php echo $sertifikat['nama_pengajar'] ?></div>    
                    </div>

                    <img src="<?php echo base_url() ?>assets/images/sertifikat.png" style="width: 860px; margin-left: 75px;"></img>

                    <div class="col-md-12 btn-daftar"><br><br>
                        <a href="<?php echo base_url() ?>staf/sertifikat/data_sertifikat" class="btn btn-default">Kembali</a>
                        &nbsp
                        <a href="<?php echo base_url() ?>staf/sertifikat/print_sertifikat/<?php echo $sertifikat['id_sertifikat'] ?>" class="btn btn-info">Print</a>
                    </div><br><br><br><br><br><br><br><br>
                

            </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
