            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Absensi Private</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-pencil-square-o icon-menu" aria-hidden="true"></i> Absensi Private
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

                <a href="<?php echo base_url() ?>staf/absensi/tambah_private" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Absensi</a>&nbsp
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

                        <?php 
                        $no = 1;
                        foreach($siswa as $list){ 
                        ?>

                            <tr>
                                <td></td>
                                <td><?php echo $list['nama_siswa'] ?></td>
                                <td class="hadir"></td>                                
                                
                                <td class="hadir">
                                    <!-- <a href="<?php echo base_url();?>staf/absensi/rubah_private/<?php echo $data->id_absensi; ?>"><i class="fa fa-pencil-square-o icon-menu" aria-hidden="true"></i> --></a>
                                </td>                          
                            </tr>
                        <?php } ?>   

                        </tbody>

                    </table>                 

                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
