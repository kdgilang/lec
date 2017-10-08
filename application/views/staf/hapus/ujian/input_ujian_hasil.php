            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Tambah Data Ujian</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text-o icon-menu" aria-hidden="true"></i> Tambah Data Ujian
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
                      
                      <form action="<?php echo base_url() ?>staf/ujian/hasil" action="GET">
                        <div class="form-group margin">
                          <!-- <label for="cari">data yang dicari</label> -->
                          <input type="text" class="form-control input" id="cari" name="cari" placeholder="Nim" value="<?php
                            if(count($cari)>0)
                            {
                              foreach ($cari as $data) {
                              echo $data->nim;
                              }
                            }

                            else
                            {
                              echo "Nim tidak ditemukan";
                            }

                            ?>"">
                        </div>
                        <!-- <input class="btn btn-primary" type="submit" value="Cari"> -->
                      </form>          

                       <div class="form-group margin">     

                          <input class="form-control input" placeholder="Nama" disabled value="<?php
                            if(count($cari)>0)
                            {
                              foreach ($cari as $data) {
                              echo $data->nama;
                              }
                            }

                            else
                            {
                              echo "";
                            }

                            ?>">
                        </div>                        

                      <form action="<?php echo base_url(). 'staf/ujian/tambah_ujian'; ?>" method="post">    

                      <div class="form-group margin">
                        <input type="hidden" class="form-control" name="id_pendaftaran" value="<?php echo $data->id_pendaftaran; ?>"> 
                      </div> 

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Kode Materi" name="kode_materi">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama Materi" name="nama_materi">          
                      </div>  
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nilai" name="nilai">
                      </div>    
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Total" name="total">
                      </div>
                      <div class="col-md-12 btn-daftar">
                        <a href="<?php echo base_url(). 'staf/ujian/data_ujian'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                        <input type="submit" class="btn btn-success" value="Simpan"></button>
                      </div>      
                    </div>
                      </div><br>
                  </div>
                  </div>
                      </form>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
