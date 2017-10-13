            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Absensi Group</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-pencil-square-o icon-menu" aria-hidden="true"></i> Absensi Group
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table --> 

                <a href="<?php echo base_url() ?>staf/absensi/tambah_group/<?php echo $id_kelas; ?>/1/" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Absensi</a>&nbsp                              
                <div><br></div>

                <h4><center><b>DAFTAR KEHADIRAN SISWA</b></center></h4>   
                <!-- <h5><center>Tahun 2017</center></h5> --><br>

                <table class="table table-striped" width="100%">                      
                    <tbody>
                        <tr>
                            <td><p class="help-block">* H = Hadir, A = Alpha.</p></td> 
                            <td class="absensi_pengajar ">
                                <b style="margin-right: 40px;">Nama Pengajar : &nbsp&nbsp&nbsp&nbsp<?php echo $pengajar['nama_pengajar'] ?></b>
                            </td>
                        </tr>
                    </tbody>
                </table>

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
                        
                            <?php 
                                $no = 1;
                                if (!empty($kelas)):
                                foreach ($kelas as $key => $value) {?>
                                    <tr>
                                        <td><?php echo $no++?></td>
                                        <td><?php echo $value['nama_siswa'] ?></td>
                                        <td class="hadir"><?php echo $value['pert1'] ?></td>
                                        <td class="hadir"><?php echo $value['pert2'] ?></td>
                                        <td class="hadir"><?php echo $value['pert3'] ?></td>
                                        <td class="hadir"><?php echo $value['pert4'] ?></td>
                                        <td class="hadir"><?php echo $value['pert5'] ?></td>
                                        <td class="hadir"><?php echo $value['pert6'] ?></td>
                                        <td class="hadir"><?php echo $value['pert7'] ?></td>
                                        <td class="hadir"><?php echo $value['pert8'] ?></td>
                                        <td class="hadir"><?php echo $value['pert9'] ?></td>
                                        <td class="hadir"><?php echo $value['pert10'] ?></td>
                                        <td class="hadir"><?php echo $value['pert11'] ?></td>
                                        <td class="hadir"><?php echo $value['pert12'] ?></td>
                                        <td class="hadir"><?php echo $value['pert13'] ?></td>
                                        <td class="hadir"><?php echo $value['pert14'] ?></td>
                                        <td class="hadir"><?php echo $value['pert15'] ?></td>
                                    </tr>   
                            <?php }
                                endif;
                            ?>

                        </tbody>

                    </table>  

                    <a href="<?= base_url('kelas'); ?>" class="btn btn-default">Kembali</a>&nbsp               

                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
