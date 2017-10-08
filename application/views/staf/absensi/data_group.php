            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Absensi Group</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Data Absensi Group
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
                                <th>Nama Group</th>  
                                <th>Status</th> 
                                <th></th>         
                            </tr>
                        </thead>
                        <tbody>  

                        <?php
                        $no = 1;
                        foreach ($dataGroup as $data) : //ngabsen data
                        ?>

                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $data->nama_kelas; ?></td>
                                <td><?php echo $data->status; ?></td>
                                <td>
                                    <a href="<?php echo base_url();?>staf/absensi/cek_absensi/<?php echo $data->id_kelas; ?>" class="btn btn-sm btn-success">Cek Absensi</a>
                                </td>                                                    
                            </tr>
                        
                        <?php
                            endforeach;
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
