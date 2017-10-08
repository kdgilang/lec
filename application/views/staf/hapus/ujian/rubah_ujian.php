            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Ubah Data Ujian</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text-o icon-menu" aria-hidden="true"></i> Ubah Data Ujian
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form kelas -->
                <form action="<?php echo base_url(). 'staf/ujian/update_ujian'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">                    
                    <div class="panel-body daftar">

                    <input type="hidden" class="form-control" name="id_ujian" value="<?php echo $ujian['id_ujian'] ?>">

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="NIM" name="nim" value="<?php echo $ujian['nim'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama" name="nama" value="<?php echo $ujian['nama'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Kode Materi" name="kode_materi" value="<?php echo $ujian['kode_materi'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama Materi" name="nama_materi" value="<?php echo $ujian['nama_materi'] ?>">          
                      </div>  
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nilai" name="nilai" value="<?php echo $ujian['nilai'] ?>">          
                      </div>    
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Total" name="total" value="<?php echo $ujian['total'] ?>">          
                      </div>         
                      <div class="col-md-12 btn-daftar">
                        <a href="<?php echo base_url(). 'staf/ujian/data_ujian'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                        <input type="submit" class="btn btn-success" value="Simpan"></button>
                      </div>      
                    </div>
                  </div>
                  </div>
                  </form>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
