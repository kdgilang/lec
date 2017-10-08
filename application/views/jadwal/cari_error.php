            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Input Siswa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Input Siswa
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

                     <?php foreach($tampil as $row) : ?>

                      <tr>                      
                        <td></td>   
                        <div class="form-group margin">        
                          <input type="hidden" class="form-control input" placeholder="Masukkan Nama Siswa" name="nama_siswa" value="<?php print $row->nama_siswa; ?>">
                        </div>                   
                      </tr>
                      
                      <?php endforeach; ?>
                      
                      <div class="cari_error">
                        * Maaf, Nama Siswa yang Anda Masukkan Tidak Ada
                      </div>

                      <form action="<?php print site_url();?>jadwal/cari_siswa/<?php echo $id_kelas ?>" method=POST>
                        <input class="form-control input" type=text name=cari placeholder="Masukkan Nama Siswa" value="">
                      </form>   

                        <div class="form-group margin">
                        <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_kelas" value="<?php print $id_kelas; ?>">        
                          <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_pendaftaran" value="<?php print $row->id_pendaftaran; ?>">
                        </div>

                        <div class="form-group">       
                          <select class="form-control">
                            <option value="Aktif">Aktif</option>
                            <option value="Tidak Aktif">Tidak Aktif</option>
                          </select>
                        </div>

                        <div class="col-md-12 btn-daftar">
                          <a href="<?php echo base_url() ?>jadwal/kelola_group/<?php echo $id_kelas ?>" class="btn btn-default">Kembali</a>&nbsp
                          <input type="submit" class="btn btn-success" value="Simpan"></button>
                        </div>

                    </div>
                  </div>
                  </div>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('staf/layout/footer'); ?>
