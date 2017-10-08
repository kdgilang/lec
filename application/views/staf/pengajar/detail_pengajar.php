            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Detail Pengajar</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <span class="glyphicon glyphicon-user icon-menu" aria-hidden="true"></span> Detail Pengajar
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->                
                <div class="box-body">

                <div class="col-md-12 detail_pengajar">

                    <div class="col-md-3 foto_pengajar">
                        <img class="img-responsive img-circle" src="<?php echo site_url('assets/uploads/'.$pengajar['foto_pengajar']) ?>" />    
                    </div>
                    <div class="col-md-9 data_pengajar">
                        <table class="table table-striped" width="100%">                      
                            <tbody>
                                <tr>
                                    <td width="400px"><b>Kode Pengajar</b></td>
                                    <td>:</td>
                                    <td><?php echo $pengajar['nip'] ?></td>             
                                </tr>
                                <tr>
                                    <td><b>Nama Pengajar</b></td>
                                    <td>:</td>
                                    <td><?php echo $pengajar['nama_pengajar'] ?></td>              
                                </tr>
                                <tr>
                                    <td><b>Alamat</b></td>
                                    <td width="30px">:</td>
                                    <td><?php echo $pengajar['alamat'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Telpon</b></td>
                                    <td>:</td>
                                    <td><?php echo $pengajar['telpon'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td>:</td>
                                    <td><?php echo $pengajar['email'] ?></td>
                                </tr>
                                <tr>
                                    <td><b>Status</b></td>
                                    <td>:</td>
                                    <td><?php echo $pengajar['status'] ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                    <div class="col-md-12 table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <center><h4>Jadwal Mengajar</h4></center><br>
                        <thead>
                            <tr>                                
                                <th>No</th>
                                <th>Hari</th>
                                <th>Jam</th>
                                <th>Group</th>          
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
                                <td><?php echo $value['nama_kelas'] ?></td>
                            </tr>
                            
                        <?php endforeach; ?>

                        </tbody>
                    </table>
                    </div>

                            <div>
                                <a href="<?php echo base_url() ?>staf/pengajar/data_pengajar" class="btn btn-default">Kembali</a>
                            </div>
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
