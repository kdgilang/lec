            
        <?php $this->load->view('pelajar/layout/header');?>
        <?php $this->load->view('pelajar/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Jadwal Kursus</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-calendar icon-menu" aria-hidden="true"></i> Jadwal Kursus
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   

                <ul class="nav nav-tabs">
                    <li class="active"><a href="<?php echo base_url() ?>jadwal/data_group">Group</a></li>
                    <li><a href="<?php echo base_url() ?>jadwal/data_jadwal_private">Private</a></li>
                    <!-- <li><a href="#">Private</a></li>
                    <li><a href="#">Menu 3</a></li> -->
                </ul>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Hari</th>
                                <th>Nama</th>
                                <th>Jam</th>
                                <th>Pengajar</th>           
                            </tr>
                        </thead>
                        <tbody>                       

                        <?php 
                            $no = 1;
                            if (!empty($kelas)):
                            foreach ($kelas as $key => $value) {?>    
                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $value['hari'] ?></td>
                                <td><?php echo $value['nama_siswa'] ?></td>
                                <td><?php echo $value['jam'] ?></td>
                                <td><?php echo $value['nama_pengajar'] ?></td>
                            </tr>                                                                  

                        <?php }
                            endif;
                        ?>   

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
