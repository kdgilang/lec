            
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

                <form action="<?php echo base_url() ?>staf/absensi/ganti_pertemuan/<?php echo $this->uri->segment(4) ?>" method="post">

                <div class="col-md-6">
                    <div class="col-md-6 form-group" style="padding-left: 0px !important;">
                        <label>Pertemuan</label>
                        <?php function select($var1,$var2){
                            if($var1 == $var2){
                                return 'selected="selected"';
                            }
                            } ?>
                        <select class="form-control" name="pertemuan">
                            <option <?php echo select($pertemuan,1); ?>>1</option>
                            <option <?php echo select($pertemuan,2); ?>>2</option>
                            <option <?php echo select($pertemuan,3); ?>>3</option>
                            <option <?php echo select($pertemuan,4); ?>>4</option>
                            <option <?php echo select($pertemuan,5); ?>>5</option>
                            <option <?php echo select($pertemuan,6); ?>>6</option>
                            <option <?php echo select($pertemuan,7); ?>>7</option>
                            <option <?php echo select($pertemuan,8); ?>>8</option>
                            <option <?php echo select($pertemuan,9); ?>>9</option>
                            <option <?php echo select($pertemuan,10); ?>>10</option>
                            <option <?php echo select($pertemuan,11); ?>>11</option>
                            <option <?php echo select($pertemuan,12); ?>>12</option>
                            <option <?php echo select($pertemuan,13); ?>>13</option>
                            <option <?php echo select($pertemuan,14); ?>>14</option>
                            <option <?php echo select($pertemuan,15); ?>>15</option>
                        </select>
                    </div>

                    <div class="col-md-6" style="margin-top: 25px;">
                        <button class="btn btn-default">Cari</button>
                    </div>

                </div>                

                </form>

                <div class="col-md-6">
                    <p class="help-block kehadiran">* H = Hadir, A = Alpha.</p>
                </div>

                <div class="col-md-12 table-responsive"> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th colspan="15" class="pertemuan">Pertemuan <?php echo $pertemuan; ?></th>                                                        
                            </tr>
                        </thead>
                        <tbody> 

                        <?php
                        $no = 1;
                        if (!empty($dataAbsensi)):
                        foreach ($dataAbsensi as $data) : //ngabsen data
                        ?>

                            <tr>
                                <td width="10px"><?php echo $no++?></td>
                                <td><?php echo $data->nama_siswa; ?></td>
                                <!-- <td><?php echo $data->id_pendaftaran; ?></td> -->

                        <form action="<?php echo base_url(). 'staf/absensi/tambah_absensi'; ?>" method="post"> 

                            <div class="form-group margin">        
                              <input type="hidden" class="form-control input" placeholder="Id Pendaftaran" name="id_pendaftaran[]" value="<?php print $data->id_pendaftaran; ?>">
                              <input type="hidden" name="id_kelas[]" value="<?php print $id_kelas; ?>">
                              <input type="hidden" name="pertemuan[]" value="<?php print $pertemuan; ?>">
                            </div>
                            <td width="200px" class="hadir">
                                <div>       
                                    <select class="form-control" name="status[]">
                                      <option value="H">H</option>
                                      <option value="A">A</option>             
                                    </select>
                                  </div>
                            </td>                         
                        </tr>

                        <?php
                            endforeach;
                            endif;
                        ?> 

                        </tbody>

                    </table><br>   

                    <div class="col-md-12 btn-daftar">
                         <a href="<?php echo base_url() ?>staf/absensi/cek_absensi/<?php echo $id_kelas ?>" class="btn btn-default">Kembali</a>&nbsp
                        <input class="btn btn-success" value="Simpan" type="submit">
                    </div>

                    <div><br><br><br><br></div>  

                        </form>
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
