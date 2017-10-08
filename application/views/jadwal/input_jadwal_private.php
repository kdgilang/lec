            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Input Jadwal Private</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Input Jadwal Private
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

                      <form action="<?php echo base_url(). 'jadwal/tambah_jadwal_private'; ?>" method="post"><div class="clearfix"></div>  

                      <div class="form-group margin">        
                        <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_pendaftaran" value="<?php echo $id_pendaftaran; ?>">
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

                      <!-- </form> -->                     

                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Jam" name="jam">          
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
                        <a href="<?php echo base_url(). 'jadwal/data_jadwal_private'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
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

    <?php $this->load->view('layout/footer'); ?>
