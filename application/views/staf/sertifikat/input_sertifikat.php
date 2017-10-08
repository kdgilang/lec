            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Tambah Sertifikat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-certificate icon-menu" aria-hidden="true"></i></i> Tambah Sertifikat
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form kelas -->
                
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">                    
                    <div class="panel-body daftar">

                      <?php foreach($tampil as $row) : ?>

                      <tr>                      
                        <td></td>   
                        <div class="form-group margin">        
                          <input type="hidden" class="form-control input" placeholder="Masukkan No Pendaftaran" name="id_pendaftaran" value="<?php print $row->id_pendaftaran; ?>">
                        </div>                   
                      </tr>
                      
                      <?php endforeach; ?>
                      
                      <form action="<?php print site_url();?>staf/sertifikat/cari" method=POST>
                        <input class="form-control input" type=text name=cari placeholder="Masukkan Nama Siswa" value="<?php print $row->nama_siswa; ?>">
                      </form>                              

                      <form action="<?php echo base_url(). 'staf/sertifikat/tambah_sertifikat'; ?>" method="post">

                      <div class="form-group margin">        
                        <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_pendaftaran" value="<?php print $row->id_pendaftaran; ?>">
                      </div>

                      <div class="form-group">  
                        <label>Pengajar</label>     
                        <select class="form-control" name="id_pengajar">
                          <option value="5">Alung Lingga</option>
                          <option value="6">Putra Gunawan</option>
                          <option value="7">Galuh Ginanti</option>
                          <option value="8">Wiwik Marlia</option>
                        </select>
                      </div>
                      <div class="form-group">  
                        <label>Keterangan</label>     
                        <select class="form-control" name="keterangan">
                          <option value="Sudah Mengambil">Sudah Mengambil</option>
                          <option value="Belum Mengambil">Belum Mengambil</option>
                        </select>
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_cetak" type="text" placeholder="Tanggal Cetak">
                        </div>                  
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_terbit" type="text" placeholder="Tanggal Terbit">
                        </div>                  
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_mengambil" type="text" placeholder="Tanggal Mengambil">
                        </div>                  
                      </div>
                      <div class="form-group">  
                        <label>Pemberi</label>     
                        <select class="form-control" name="pemberi">
                          <option value="Wayan Adnyana">Wayan Adnyana</option>
                          <option value="Komang Sudani">Komang Sudani</option>
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

    <?php $this->load->view('staf/layout/footer'); ?>
