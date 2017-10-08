            
        <?php $this->load->view('pelajar/layout/header');?>
        <?php $this->load->view('pelajar/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Hasil Ujian</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text-o icon-menu" aria-hidden="true"></i> Hasil Ujian
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th> 
                                <th>Kode Materi</th>  
                                <th>Nama Materi</th> 
                                <th>Nilai</th>
                                <th>Total</th>                                                          
                            </tr>
                        </thead>
                        <tbody> 

                        <?php 
                        $no = 1;
                        foreach($ujian as $list){ 
                        ?>                      

                            <tr>                                
                                <td width="40px"><?php echo $no++?></td> 
                                <td><?php echo $list['nim'] ?></td> 
                                <td><?php echo $list['nama'] ?></td>
                                <td><?php echo $list['kode_materi'] ?></td>
                                <td><?php echo $list['nama_materi'] ?></td>
                                <td><?php echo $list['nilai'] ?></td>
                                <td><?php echo $list['total'] ?></td>                    
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
