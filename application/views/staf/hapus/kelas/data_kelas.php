            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Kelas</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-hospital-o icon-menu" aria-hidden="true"></i> Data Kelas
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
                                <th>Kode Materi</th>
                                <th>Nama Materi</th>
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
                                <td><?php echo $list['kode_materi'] ?></td> 
                                <td><?php echo $list['nama_materi'] ?></td> 
                                <td><?php echo $list['nama_kelas'] ?></td>
                                <td>                                    
                                    <a href="<?php echo base_url() ?>staf/kelas/detail_kelas" class="btn btn-sm btn-primary">Detail</a>                     
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
