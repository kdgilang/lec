            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Tambah Siswa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Tambah Siswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form kelas -->
                 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">                    
                    <div class="panel-body daftar"> 

                      <form action="<?php echo base_url(). 'jadwal/tambah_anggota'; ?>" method="post">

                        <div class="form-group margin">
                          <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_kelas" value="<?php print $id_kelas; ?>">  
                          <input type="hidden" class="form-control input" name="id_pengajar" value="<?php echo $pengajar['id_pengajar'] ?>">    
                        </div>

                        <div class="form-group margin">
                          <input type="text" class="form-control input" name="nama_siswa" id="nama_siswa" placeholder="Cari nama" required>
                        </div>

                        <div class="form-group">    
                          <label>Status</label>   
                          <select class="form-control" name="status">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                          </select>
                        </div>

                        <div class="col-md-12 btn-daftar">
                          <a href="<?php echo base_url() ?>jadwal/kelola_group/<?php echo $id_kelas ?>" class="btn btn-default">Kembali</a>&nbsp
                          <input type="submit" class="btn btn-success" value="Simpan"></button>
                        </div>

                      </form> 
                    </div>
                  </div>
                  </div>
                  </form>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('staf/layout/footer'); ?>
