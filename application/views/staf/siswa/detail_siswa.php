            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Detail Siswa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Detail Siswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->                
                <div class="box-body">
                    <table class="table table-striped" width="100%">                      
                        <tbody> 

                            <tr>
                                <td width="400px"><b>Id Pendaftaran</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['id_pendaftaran'] ?></td>               
                            </tr>
                            <tr>
                                <td width="400px"><b>Nama Siswa</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['nama_siswa'] ?></td>               
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['alamat'] ?></td>               
                            </tr>
                            <tr>
                                <td><b>Tanggal Lahir</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['tgl_lahir'] ?></td>               
                            </tr>
                            <tr>
                                <td><b>Telpon</b></td>
                                <td width="30px">:</td>
                                <td><?php echo $siswa['telpon'] ?></td>                      
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['email'] ?></td>                     
                            </tr>
                            <tr>
                                <td><b>Target Level</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['target_level'] ?></td>            
                            </tr>
                            <tr>
                                <td><b>Kelas</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['kelas'] ?></td>            
                            </tr>
                            <tr>
                                <td><b>Pembayaran</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['pembayaran'] ?></td>            
                            </tr>
                            <!-- <tr>
                                <td><b>Password</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['password'] ?></td>            
                            </tr> -->

                        </tbody>

                    </table>

                    <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <center><h4>Jadwal Kursus</h4></center><br>
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Pengajar</th>         
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $no=1;
                        foreach ($list_jadwal as $key => $value):?>
                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $value['hari'] ?></td>
                                <td><?php echo $value['jam'] ?></td>
                                <td><?php echo $value['nama_pengajar'] ?></td>
                            </tr>
                        
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                    </div>

                            <div>
                                <a href="<?php echo base_url() ?>staf/siswa/data_siswa" class="btn btn-default">Kembali</a>
                            </div>
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
