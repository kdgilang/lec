            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Absensi</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-pencil-square-o icon-menu" aria-hidden="true"></i> Data Absensi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->  
                <!-- <a href="<?php echo base_url() ?>absensi/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Absensi</a> -->                
                <div><br></div>

                <h4><center><b>DAFTAR KEHADIRAN SISWA</b></center></h4>   
                <h5><center>Tahun 2017</center></h5><br><br> 

                <!-- <p class="help-block kehadiran">* H = Hadir, T = Tidak Hadir.</p> -->

                <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th colspan="6" class="pertemuan">Pertemuan</th>                                                        
                            </tr>
                        </thead>
                        <tbody> 

                            <tr>
                                <td width="40px"></td>
                                <td></td>
                                <td></td>
                                <td class="hadir">1</td>
                                <td class="hadir">2</td>
                                <td class="hadir">3</td>
                                <td class="hadir">4</td>
                                <td class="hadir">5</td>
                                <td class="hadir">6</td>  
                                <td class="hadir"></td>                          
                            </tr> 

                        <form action="<?php echo base_url(). 'absensi/tambah_absensi'; ?>" method="post">                         
 
                            <tr>
                                <td>1</td>
                                <td>130030480</td>
                                <td>Try Agus Suhartawan</td>
                                <td class="hadir" width="100px"> 
                                    <div class="form-group">       
                                        <select class="form-control" name="kehadiran">
                                          <option value="SD">Hadir</option>
                                          <option value="SMP">Alfa</option>             
                                        </select>
                                      </div>                                  
                                    <!-- <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H -->
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="kehadiran">
                                          <option value="SD">Hadir</option>
                                          <option value="SMP">Alfa</option>             
                                        </select>
                                      </div>
                                    <!-- <label class="checkbox-inline">
                                        <input type="checkbox">
                                    </label>H
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H -->
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="kehadiran">
                                          <option value="SD">Hadir</option>
                                          <option value="SMP">Alfa</option>             
                                        </select>
                                      </div>
                                    <!-- <label class="checkbox-inline">
                                        <input type="checkbox">
                                    </label>H
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H -->
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="kehadiran">
                                          <option value="SD">Hadir</option>
                                          <option value="SMP">Alfa</option>             
                                        </select>
                                      </div>
                                    <!-- <label class="checkbox-inline">
                                        <input type="checkbox">
                                    </label>H
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H -->
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="kehadiran">
                                          <option value="SD">Hadir</option>
                                          <option value="SMP">Alfa</option>             
                                        </select>
                                      </div>
                                    <!-- <label class="checkbox-inline">
                                        <input type="checkbox">
                                    </label>H
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H -->
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="kehadiran">
                                          <option value="SD">Hadir</option>
                                          <option value="SMP">Alfa</option>             
                                        </select>
                                      </div>
                                    <!-- <label class="checkbox-inline">
                                        <input type="checkbox">
                                    </label>H
                                    <label class="checkbox-inline">
                                        <input type="checkbox" value="H">
                                    </label>H -->
                                </td>  
                                <td>                                  
                                    <!-- <input type="submit" class="btn btn-sm btn-success" value="Simpan"> -->
                                    &nbsp
                                    <a href="#" class="btn  btn-sm btn-warning">Ubah</a>
                                </td>                          
                            </tr>

                                                                        
                        </form>


                        </tbody>

                    </table>   
                    <input type="submit" class="btn btn-success" value="SIMPAN">                 

                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
