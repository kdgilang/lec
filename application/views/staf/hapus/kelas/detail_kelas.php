            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Detail Kelas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-hospital-o icon-menu" aria-hidden="true"></i> Detail Kelas
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
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Kelas</th>                                                       
                            </tr>
                        </thead>
                        <tbody>  

                        <?php 
                        $no = 1;
                        foreach($kelas as $list){ 
                        ?>                                              

                            <tr>      
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $list['nim'] ?></td> 
                                <td><?php echo $list['nama'] ?></td>                                
                                <td><?php echo $list['nama_kelas'] ?></td>                            
                            </tr>  
                        <?php } ?>                                                        

                        </tbody>
                    </table>
                                <div>
                                    <a href="<?php echo base_url() ?>staf/kelas/data_kelas" class="btn btn-default">Kembali</a>
                                </div>
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
