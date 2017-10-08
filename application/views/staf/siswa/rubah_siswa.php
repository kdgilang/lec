            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

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
                <form action="<?php echo base_url(). 'staf/siswa/update_siswa'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">                    
                    <div class="panel-body daftar">

                    <input type="hidden" class="form-control" name="id_pendaftaran" value="<?php echo $siswa['id_pendaftaran'] ?>">

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama Siswa" name="nama_siswa" value="<?php echo $siswa['nama_siswa'] ?>">          
                      </div>
                      <div class="form-group">                               
                        <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                            <input class="form-control date" name="tgl_lahir" type="text" placeholder="Tanggal Lahir" value="<?php echo $siswa['tgl_lahir'] ?>">
                        </div>                  
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Alamat" name="alamat" value="<?php echo $siswa['alamat'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Telpon" name="telpon" value="<?php echo $siswa['telpon'] ?>">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Email" name="email" value="<?php echo $siswa['email'] ?>">          
                      </div>
                      
                      <?php 
                        function select($var1,$var2){
                          if($var1 == $var2){
                            return 'selected="selected"';
                          }
                        }
                       ?>
                      <div class="form-group">
                        <label>Kelas</label>
                        <select class="form-control" name="kelas">
                          <option value="Group" <?php echo select("Group",$siswa['kelas']) ?>>Group</option>
                          <option value="Private" <?php echo select("Private",$siswa['kelas']) ?>>Private</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Target Level</label>
                        <select class="form-control" name="target_level">
                          <option value="General English" <?php echo select("General English",$siswa['target_level']) ?>>General English</option>
                          <option value="Conversation Class" <?php echo select("Conversation Class",$siswa['target_level']) ?>>Conversation Class</option>          
                          <option value="English for Tourism" <?php echo select("English for Tourism",$siswa['target_level']) ?>>English for Tourism</option>
                          <option value="English for Law professional" <?php echo select("English for Law professional",$siswa['target_level']) ?>>English for Law professional</option>
                          <option value="TOEFL / IELTS Preparation" <?php echo select("TOEFL / IELTS Preparation",$siswa['target_level']) ?>>TOEFL / IELTS Preparation</option>
                          <option value="Company Traning" <?php echo select("Company Traning",$siswa['target_level']) ?>>Company Traning</option>
                        </select>
                      </div>   
                      <div class="form-group">
                        <label>Pembayaran</label>
                        <select class="form-control" name="pembayaran">
                          <option value="Lunas" <?php echo select("Lunas",$siswa['pembayaran']) ?>>Lunas</option>
                          <option value="Belum Lunas" <?php echo select("Belum Lunas",$siswa['pembayaran']) ?>>Belum Lunas</option>
                          <option value="DP 50 %" <?php echo select("DP 50 %",$siswa['pembayaran']) ?>>DP 50 %</option>
                        </select>
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Password" name="password" value="<?php echo $siswa['password'] ?>">          
                      </div>                           
                      <div class="col-md-12 btn-daftar">
                        <a href="<?php echo base_url(). 'staf/siswa/data_siswa'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
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

    <?php $this->load->view('staf/layout/footer'); ?>
