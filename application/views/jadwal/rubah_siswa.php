            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Ubah Siswa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Ubah Siswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form pendaftaran -->
                <form action="<?php echo base_url(). 'jadwal/update_siswa'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
                    <!-- <div class="panel-heading">
                      <h3 class="panel-title title-daftar">Daftar Kursus</h3>
                    </div> -->
                    <div class="panel-body daftar">

                    <input type="hidden" class="form-control" name="id_anggota" value="<?php echo $siswa['id_anggota'] ?>">
                    <input type="hidden" class="form-control" name="id_kelas" value="<?php echo $siswa['id_kelas'] ?>">

                      <?php 
                        function select($var1,$var2){
                          if($var1 == $var2){
                            return 'selected="selected"';
                          }
                        }
                       ?>   
                      <div class="form-group">   
                        <label>Status</label>    
                        <select class="form-control" name="status" value="<?php echo $siswa['status'] ?>">
                          <option value="Aktif" <?php echo select("Aktif",$siswa['status']) ?>>Aktif</option>
                          <option value="Tidak Aktif" <?php echo select("Tidak Aktif",$siswa['status']) ?>>Tidak Aktif</option>
                        </select>
                      </div>                                         
                      <div class="col-md-12 btn-daftar">
                       <a href="<?php echo base_url() ?>jadwal/kelola_group/<?php echo $siswa['id_kelas'] ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
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
