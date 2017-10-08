            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Ubah Sertifikat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-certificate icon-menu" aria-hidden="true"></i></i> Ubah Sertifikat
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form kelas -->
                <form action="<?php echo base_url(). 'staf/sertifikat/update_sertifikat'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">             

                  <input type="hidden" class="form-control" name="id_sertifikat" value="<?php echo $sertifikat['id_sertifikat'] ?>">

                    <div class="panel-body daftar">
                      <div class="form-group margin">        
                        <!-- <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_pendaftaran" value="<?php echo $sertifikat['id_pendaftaran'] ?>"> -->
                    </div>
                    <div class="form-group margin">        
                      <input class="form-control input" placeholder="Nama Siswa" name="nama_siswa" value="<?php echo $sertifikat['nama_siswa'] ?>">
                    </div>  

                      <?php 
                        function select($var1,$var2){
                          if($var1 == $var2){
                            return 'selected="selected"';
                          }
                        }
                       ?>

                      <div class="form-group">  
                        <label>Pengajajar</label>     
                        <select class="form-control" name="id_pengajar">
                          <option value="5" <?php echo select("5",$sertifikat['id_pengajar']) ?>>Alung Lingga</option>
                          <option value="6" <?php echo select("6",$sertifikat['id_pengajar']) ?>>Putra Gunawan</option>
                        </select>
                      </div>

                      <!-- <div class="form-group">  
                        <label>Pengajar</label>     
                        <select class="form-control" name="id_pengajar">
                          <option value="5">Alung Lingga</option>
                          <option value="6">Putra Gunawan</option>
                          <option value="7">Galuh Ginanti</option>
                          <option value="8">Wiwik Marlia</option>
                        </select>
                      </div> -->

                      <div class="form-group">  
                        <label>Keterangan</label>     
                        <select class="form-control" name="keterangan">
                          <option value="Sudah Mengambil" <?php echo select("Sudah Mengambil",$sertifikat['keterangan']) ?>>Sudah Mengambil</option>
                          <option value="Belum Mengambil" <?php echo select("Belum Mengambil",$sertifikat['keterangan']) ?>>Belum Mengambil</option>
                        </select>
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_cetak" type="text" placeholder="Tanggal Cetak" value="<?php echo $sertifikat['tgl_cetak'] ?>">
                        </div>                  
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_terbit" type="text" placeholder="Tanggal Terbit" value="<?php echo $sertifikat['tgl_terbit'] ?>">
                        </div>                  
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_mengambil" type="text" placeholder="Tanggal Mengambil" value="<?php echo $sertifikat['tgl_mengambil'] ?>">
                        </div>                  
                      </div>
                      <div class="form-group">  
                        <label>Pemberi</label>     
                        <select class="form-control" name="pemberi">
                          <option value="Wayan Adnyana" <?php echo select("Wayan Adnyana",$sertifikat['pemberi']) ?>>Wayan Adnyana</option>
                          <option value="Komang Sudani" <?php echo select("Komang Sudani",$sertifikat['pemberi']) ?>>Komang Sudani</option>
                        </select>
                      </div>
                      <div class="col-md-12 btn-daftar">
                        <a href="<?php echo base_url(). 'staf/sertifikat/data_sertifikat'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                        <input type="submit" class="btn btn-success" value="Simpan"></button>
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
