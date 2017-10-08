            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

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
                <!-- form pendaftaran -->
                <form action="<?php echo base_url(). 'staf/siswa/tambah_siswa_offline'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
                    <!-- <div class="panel-heading">
                      <h3 class="panel-title title-daftar">Daftar Kursus</h3>
                    </div> -->
                    <div class="panel-body daftar">
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama" name="nama">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Alamat" name="alamat">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Telpon" name="telpon">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Email" name="email">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Usia" name="usia">          
                      </div>      
                      <div class="form-group">       
                        <select class="form-control" name="pendidikan_akhir">
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>          
                          <option value="SMA">SMA</option>   
                          <option value="Kuliah">Kuliah</option>       
                        </select>
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Domisili" name="domisili">          
                      </div>      
                      <div class="form-group">
                        <label>Programs</label>
                        <select class="form-control" name="program">
                          <option value="General English">General English</option>
                          <option value="Conversation Class">Conversation Class</option>          
                          <option value="English for Tourism">English for Tourism</option>
                          <option value="English for Law professional">English for Law professional</option>
                          <option value="TOEFL / IELTS Preparation">TOEFL / IELTS Preparation</option>
                          <option value="Company Traning">Company Traning</option>
                        </select>
                      </div>                            
                      <div class="col-md-12 btn-daftar">
                        <input type="submit" class="btn btn-success" value="DAFTAR"></button>        
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
