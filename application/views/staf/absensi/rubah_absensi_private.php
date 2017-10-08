            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

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

                <ul class="nav nav-tabs">
                    <li class="active"><a href="<?php echo base_url() ?>staf/absensi/data_group">Group</a></li>
                    <li><a href="<?php echo base_url() ?>staf/absensi/data_absensi_private">Private</a></li>
                    <!-- <li><a href="#">Private</a></li>
                    <li><a href="#">Menu 3</a></li> -->
                </ul>
                <br>

                <!-- <a href="<?php echo base_url() ?>staf/absensi/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Absensi</a>&nbsp -->
                <!-- <a href="<?php echo base_url() ?>staf/absensi/rubah" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i>
                </i> Ubah</a>  -->                 
                <div><br></div>

                <h4><center><b>DAFTAR KEHADIRAN SISWA</b></center></h4>   
                <!-- <h5><center>Tahun 2017</center></h5> --><br>          

                <p class="help-block">* H = Hadir, A = Alpha.</p>
                
                <div class="table-responsive"> 
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th colspan="16" class="pertemuan">Pertemuan</th>
                            </tr>
                        </thead>
                        <tbody>                       

                            <tr>
                                <td width="40px"></td>
                                <!-- <td></td> -->
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
                                <td class="hadir"></td>
                            </tr>                        

                        <!-- <?php
                        $no = 1;
                        foreach ($dataAbsensi as $data) : //ngabsen data
                        ?>
 -->
                            <tr>
                                <td><?php echo $no++?></td>
                                <td><?php echo $data->nama_siswa; ?></td>
                                <td class="hadir"><?php echo $data->pert1; ?></td>
                                <td class="hadir"><?php echo $data->pert2; ?></td>
                                <td class="hadir"><?php echo $data->pert3; ?></td>
                                <td class="hadir"><?php echo $data->pert4; ?></td>
                                <td class="hadir"><?php echo $data->pert5; ?></td>
                                <td class="hadir"><?php echo $data->pert6; ?></td>
                                <td class="hadir"><?php echo $data->pert7; ?></td>
                                <td class="hadir"><?php echo $data->pert8; ?></td>
                                <td class="hadir"><?php echo $data->pert9; ?></td>
                                <td class="hadir"><?php echo $data->pert10; ?></td>
                                <td class="hadir"><?php echo $data->pert11; ?></td>
                                <td class="hadir"><?php echo $data->pert12; ?></td>
                                <td class="hadir"><?php echo $data->pert13; ?></td>
                                <td class="hadir"><?php echo $data->pert14; ?></td>
                                <td class="hadir"><?php echo $data->pert15; ?></td>
                                <td class="hadir">
                                    <a href="<?php echo base_url();?>staf/absensi/rubah/<?php echo $data->id_absensi; ?>"><i class="fa fa-pencil-square-o icon-menu" aria-hidden="true"></i></a>
                                </td>                          
                            </tr>

                        <!-- <?php
                            endforeach;
                        ?>  -->

                        </tbody>

                    </table><br> 

                    <div class="col-md-12 btn-daftar">
                        <a href="http://localhost/lec/staf/absensi/data_absensi_private" class="btn btn-default">Kembali</a>&nbsp;&nbsp;
                        <input class="btn btn-success" value="Simpan" type="submit">
                    </div>               

                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
