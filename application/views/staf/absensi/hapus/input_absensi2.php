            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Tambah Absensi</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Tambah Absensi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form pendaftaran -->
                <form action="<?php echo base_url(). 'absensi/tambah_absensi'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
                    <div class="panel-body daftar">
                      <div class="col-md-12">
                        <div class="form-group margin">        
                          <input class="form-control input" placeholder="Nim" name="nim">     
                        </div>                        
                      </div>
                      <div class="col-md-12">
                        <div class="form-group margin">        
                          <input class="form-control input" placeholder="Nama" name="nama">     
                        </div>                        
                      </div>
                      <div class="col-md-4">               
                        <div class="form-group">                        
                          <label class="label_pertemuan">Pertemuan 1</label>     
                          <select class="form-control kehadiran" name="pert1">
                            <option value="H">Hadir</option>
                            <option value="T">Tidak Hadir</option>                               
                          </select>
                        </div>
                      </div>    
                      <div class="col-md-4">               
                        <div class="form-group">                        
                          <label class="label_pertemuan">Pertemuan 2</label>     
                          <select class="form-control kehadiran" name="pert2">
                            <option value="H">Hadir</option>
                            <option value="T">Tidak Hadir</option>                               
                          </select>
                        </div>
                      </div>  
                      <div class="col-md-4">               
                        <div class="form-group">                        
                          <label class="label_pertemuan">Pertemuan 3</label>     
                          <select class="form-control kehadiran" name="pert3">
                            <option value="H">Hadir</option>
                            <option value="T">Tidak Hadir</option>                               
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">               
                        <div class="form-group">                        
                          <label class="label_pertemuan">Pertemuan 4</label>     
                          <select class="form-control kehadiran" name="pert4">
                            <option value="H">Hadir</option>
                            <option value="T">Tidak Hadir</option>                               
                          </select>
                        </div>
                      </div>  
                      <div class="col-md-4">               
                        <div class="form-group">                        
                          <label class="label_pertemuan">Pertemuan 5</label>     
                          <select class="form-control kehadiran" name="pert5">
                            <option value="H">Hadir</option>
                            <option value="T">Tidak Hadir</option>                               
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4">               
                        <div class="form-group">                        
                          <label class="label_pertemuan">Pertemuan 6</label>     
                          <select class="form-control kehadiran" name="pert6">
                            <option value="H">Hadir</option>
                            <option value="T">Tidak Hadir</option>                               
                          </select>
                        </div>
                      </div>                  
                      <div class="col-md-12 btn-daftar">
                        <input type="submit" class="btn btn-success" value="SIMPAN"></button>        
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
