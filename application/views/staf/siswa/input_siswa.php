            
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
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
                    <div class="panel-body daftar">

                    <form action="<?php echo base_url(). 'staf/siswa/tambah_siswa'; ?>" method="post">
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama Siswa" name="nama_siswa">
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_lahir" type="text" placeholder="Tanggal Lahir">
                        </div>                  
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
                      <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                          <option value="Group">Group</option>
                          <option value="Private">Private</option>
                        </select>
                      </div>  
                      <div class="form-group">
                        <label>Target Level</label>
                        <select class="form-control" name="target_level">
                          <option value="General English">General English</option>
                          <option value="Conversation Class">Conversation Class</option>          
                          <option value="English for Tourism">English for Tourism</option>
                          <option value="English for Law professional">English for Law professional</option>
                          <option value="TOEFL / IELTS Preparation">TOEFL / IELTS Preparation</option>
                          <option value="Company Traning">Company Traning</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Pembayaran</label>
                        <select class="form-control" name="pembayaran">
                          <option value="Lunas">Lunas</option>
                          <option value="Belum Lunas">Belum Lunas</option>
                          <option value="DP 50 %">DP 50 %</option>
                        </select>
                      </div>   
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Password" name="password" type="password">  
                      </div>                          
                      <div class="col-md-12 btn-daftar">
                        <a href="<?php echo base_url(). 'staf/siswa/data_siswa'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                        <input type="submit" class="btn btn-success" value="Daftar"></button>
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

    <?php $this->load->view('staf/layout/footer'); ?>
