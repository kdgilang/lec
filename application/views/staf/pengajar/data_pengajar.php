            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Pengajar</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <span class="glyphicon glyphicon-user icon-menu" aria-hidden="true"></span> Data Pengajar
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
                                <th>Kode Pengajar</th>
                                <th>Nama Pengajar</th>     
                                <th>Status</th>                                        
                            </tr>
                        </thead>
                        <tbody>   

                        <?php 
                        $no = 1;
                        foreach($pengajar as $list){ 
                        ?>                    

                            <tr>                                
                                <td width="40px"><?php echo $no++?></td> 
                                <td><?php echo $list['nip'] ?></td> 
                                <td><?php echo $list['nama_pengajar'] ?></td>
                                <td><?php echo $list['status'] ?></td>
                                <td>
                                    <a href="<?php echo base_url();?>staf/pengajar/detail_pengajar/<?php echo $list['id_pengajar'] ?>" class="btn btn-sm btn-primary">Detail</a>                                    
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
