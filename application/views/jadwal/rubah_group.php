            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>
        <?php 
          $hari = $jadwal[0]['hari'];
          $hari = explode(",", $hari);
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Rubah Group</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Rubah Group
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

                      <form action="<?php echo base_url(). 'jadwal/update_group'; ?>" method="post"><div class="clearfix"></div>
                      <input type="hidden" value="<?php echo $jadwal[0]["id_jadwal"]; ?>" name="id_jadwal">
                      <input type="hidden" class="form-control" name="id_kelas" value="<?php echo $kelas['id_kelas'] ?>">

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama Group" name="nama_kelas" id="nm_kelas" value="<?php echo $kelas['nama_kelas'] ?>">          
                      </div>                      
                      
                      <?php 
                        function select($var1,$var2){
                          if($var1 == $var2){
                            return 'selected="selected"';
                          }
                        }
                       ?>   
                      <div class="form-group">       
                        <select class="form-control" name="status" value="<?php echo $kelas['status'] ?>">
                          <option value="Aktif" <?php echo select("Aktif",$kelas['status']) ?>>Aktif</option>
                          <option value="Tidak Aktif" <?php echo select("Tidak Aktif",$kelas['status']) ?>>Tidak Aktif</option>
                        </select>
                      </div>

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <div class="form-group">
                          <label></label>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("senin", $hari)) ? "checked" :"";?> type="checkbox" value="Senin">Senin
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("selasa", $hari)) ? "checked" :"";?> type="checkbox" value="Selasa">Selasa
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("rabu", $hari)) ? "checked" :"";?> type="checkbox" value="Rabu">Rabu
                                </label>
                            </div>                      
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                          <label>Hari</label>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("kamis", $hari)) ? "checked" :"";?> type="checkbox" value="Kamis">Kamis
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("jumat", $hari)) ? "checked" :"";?> type="checkbox" value="Jumat">Jumat
                                </label>
                            </div>                                               
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                          <label></label>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("sabtu", $hari)) ? "checked" :"";?> type="checkbox" value="Sabtu">Sabtu
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" <?php echo (in_array("minggu", $hari)) ? "checked" :"";?> type="checkbox" value="Minggu">Minggu
                                </label>
                            </div>                                             
                          </div>
                        </div>
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Jam" name="jam" value="<?php echo $jadwal[0]["jam"]?>">
                      </div>

                      <div class="form-group">
                        <label>Target Level</label>
                        <select class="form-control" name="target_level" value="<?php echo $jadwal[0]["target_level"]?>">
                          <option value="General English" <?php echo select("General English",$jadwal[0]["target_level"]) ?>>General English</option>
                          <option value="Conversation Class" <?php echo select("Conversation Class",$jadwal[0]["target_level"]) ?>>Conversation Class</option>          
                          <option value="English for Tourism" <?php echo select("English for Tourism",$jadwal[0]["target_level"]) ?>>English for Tourism</option>
                          <option value="English for Law professional" <?php echo select("English for Law professional",$jadwal[0]["target_level"]) ?>>English for Law professional</option>
                          <option value="TOEFL / IELTS Preparation" <?php echo select("TOEFL / IELTS Preparation",$jadwal[0]["target_level"]) ?>>TOEFL / IELTS Preparation</option>
                          <option value="Company Traning" <?php echo select("Company Traning",$jadwal[0]["target_level"]) ?>>Company Traning</option>
                        </select>
                      </div> 

                      <div class="form-group">  
                        <label>Pengajar</label>     
                        <select class="form-control" name="id_pengajar">
                          <option value="5">Alung Lingga</option>
                          <option value="6">Putra Gunawan</option>
                          <option value="7">Galuh Ginanti</option>
                          <option value="8">Wiwik Marlia</option>
                        </select>
                      </div><br>
                      <div class="col-md-12 btn-daftar">
                        <a href="<?php echo base_url(). 'jadwal/data_group'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
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
