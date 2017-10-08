            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Tambah Absensi</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-pencil-square-o icon-menu" aria-hidden="true"></i> Tambah Absensi
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table --> 
                <div><br></div>

                <h4><center><b>DAFTAR KEHADIRAN SISWA</b></center></h4>   
                <!-- <h5><center>Tahun 2017</center></h5> --><br><br> 

                <p class="help-block kehadiran">* H = Hadir, A = Alpha.</p>

                <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th colspan="15" class="pertemuan">Pertemuan</th>                                                        
                            </tr>
                        </thead>
                        <tbody> 

                            <tr>
                                <td width="40px"></td>
                                <td></td>
                                <td class="hadir">1</td>
                                <td class="hadir">2</td>
                                <td class="hadir">3</td>
                                <td class="hadir">4</td>
                                <td class="hadir">5</td>
                                <td class="hadir">6</td>
                                <td class="hadir">7</td>
                                <td class="hadir">8</td> 
                                <td class="hadir">9</td>
                                <td class="hadir">10</td>
                                <td class="hadir">11</td>
                                <td class="hadir">12</td>
                                <td class="hadir">13</td>
                                <td class="hadir">14</td>
                                <td class="hadir">15</td>                       
                            </tr> 

                        <!-- <?php
                        $no = 1;
                        foreach ($dataAbsensi as $data) : //ngabsen data
                        ?> -->

                            <tr>
                                <td></td>
                                <td></td>
                                <!-- <td><?php echo $data->id_pendaftaran; ?></td> -->

                        <!-- <form action="<?php echo base_url(). 'staf/absensi/tambah_absensi'; ?>" method="post">  -->

                                <!-- <div class="form-group margin">  -->       
                                  <!-- <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_pendaftaran" value=""> -->
                                <!-- </div> --> 

                                <input class="form-control" name="id_pendaftaran" value="<?php echo $absensi['id_absensi'] ?>">
                       

                                <td class="hadir"> 
                                    <div class="form-group">       
                                        <select class="form-control" name="pert1">
                                          <option value="H" <?php echo select("H",$absensi['pert1']) ?>>H</option>
                                          <option value="A" <?php echo select("A",$absensi['pert1']) ?>>A</option>             
                                        </select>
                                      </div>
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert2">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert3">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert4">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert5">
                                          <option value="H">Hadir</option>
                                          <option value="A">Alfa</option>             
                                        </select>
                                      </div>
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert6">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td>
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert7">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert8">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert9">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert10">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert11">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert12">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert13">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert14">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td> 
                                <td class="hadir">
                                    <div class="form-group">       
                                        <select class="form-control" name="pert15">
                                          <option value="H">H</option>
                                          <option value="A">A</option>             
                                        </select>
                                      </div>
                                </td>                         
                            </tr>

                        <!-- <?php
                            endforeach;
                        ?>  -->

                        </tbody>

                    </table>   

                        <a href="<?php echo base_url(). 'staf/absensi/data_absensi'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                        <input type="submit" class="btn btn-success" value="Simpan">                 
                        <!-- </form> -->
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
