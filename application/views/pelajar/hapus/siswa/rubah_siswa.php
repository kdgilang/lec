            
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
                <form action="<?php echo base_url(). 'siswa/update_siswa'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
                    <!-- <div class="panel-heading">
                      <h3 class="panel-title title-daftar">Daftar Kursus</h3>
                    </div> -->
                    <div class="panel-body daftar">

                    <input type="hidden" class="form-control" name="id_pendaftaran" value="<?php echo $daftar['id_pendaftaran'] ?>">

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama" name="nama" value="<?php echo $daftar['nama'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Alamat" name="alamat" value="<?php echo $daftar['alamat'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Telpon" name="telpon" value="<?php echo $daftar['telpon'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Email" name="email" value="<?php echo $daftar['email'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Usia" name="usia" value="<?php echo $daftar['usia'] ?>">          
                      </div>      
                      <div class="form-group">       
                        <select class="form-control" name="pendidikan_akhir" name="<?php echo $daftar['pendidikan_akhir'] ?>">
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>          
                          <option value="SMA">SMA</option>   
                          <option value="Kuliah">Kuliah</option>       
                        </select>
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Domisili" name="domisili" value="<?php echo $daftar['domisili'] ?>">          
                      </div>      
                      <div class="form-group">
                        <label>Programs</label>
                        <select class="form-control" name="program" value="<?php echo $daftar['program'] ?>">
                          <option value="General English">General English</option>
                          <option value="Conversation Class">Conversation Class</option>          
                          <option value="English for Tourism">English for Tourism</option>
                          <option value="English for Law professional">English for Law professional</option>
                          <option value="TOEFL / IELTS Preparation">TOEFL / IELTS Preparation</option>
                          <option value="Company Traning">Company Traning</option>
                        </select>
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
