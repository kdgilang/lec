            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Input Group</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Input Group
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

                      <form action="<?php echo base_url(). 'jadwal/tambah_group'; ?>" method="post"><div class="clearfix"></div>

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama Group" name="nama_kelas" id="nm_kelas">          
                      </div>                      
                      <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                          <option value="Aktif">Aktif</option>
                          <option value="Tidak Aktif">Tidak Aktif</option>
                          <option value="Koreksi">Koreksi</option>
                        </select>
                      </div> 

                      <div class="col-md-12">
                        <div class="col-md-4">
                          <div class="form-group">
                          <label></label>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Senin">Senin
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Selasa">Selasa
                                </label>
                            </div>  
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Rabu">Rabu
                                </label>
                            </div>                      
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                          <label>Hari</label>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Kamis">Kamis
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Jumat">Jumat
                                </label>
                            </div>                                               
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                          <label></label>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Sabtu">Sabtu
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="hari[]" type="checkbox" value="Minggu">Minggu
                                </label>
                            </div>                                             
                          </div>
                        </div>
                      </div>
                      <!-- <div class="form-group margin">        
                        <input class="form-control input" placeholder="Jam" name="jam">          
                      </div> -->

                      <div class="col-md-12 jam">
                        <div class="col-md-12" style="text-align: center;margin-bottom: 20px;">
                          <label>Jam</label>
                        </div>                        
                        <div class="col-md-5" style="padding: 0px; ">
                          <div class="input-group bootstrap-timepicker timepicker input-jam">
                            <input id="timepicker1" type="text" class="form-control input-small">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                          </div>
                        </div>

                        <div class="col-md-2" style="text-align: center; padding: 0px;">-</div>

                        <div class="col-md-5" style="padding: 0px;">
                          <div class="input-group bootstrap-timepicker timepicker input-jam">
                            <input id="timepicker1" type="text" class="form-control input-small">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                          </div> 
                        </div>

                      </div><br>

                      <br><div class="form-group">
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
