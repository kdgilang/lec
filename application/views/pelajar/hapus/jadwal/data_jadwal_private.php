            
        <?php $this->load->view('pelajar/layout/header');?>
        <?php $this->load->view('pelajar/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Jadwal Private</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-calendar icon-menu" aria-hidden="true"></i> Jadwal Private
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->                 

                  <ul class="nav nav-tabs">
                    <li><a href="<?php echo base_url() ?>pelajar/jadwal/data_group">Group</a></li>
                    <li class="active"><a href="<?php echo base_url() ?>pelajar/jadwal/data_jadwal_private">Private</a></li>
                  </ul>
                  <br>    

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>  
                                <th></th>                                
                            </tr>
                        </thead>
                        <tbody>                       

                        <?php
                        $no = 1;
                        foreach ($data_jadwal as $data) : //ngabsen data
                        ?>    
                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $data->nama_siswa; ?></td>
                                <td>
                                    <a href="<?php echo base_url();?>pelajar/jadwal/detail_jadwal_private/<?php echo $data->id_pendaftaran; ?>" class="btn btn-sm btn-primary">Detail</a>
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

    <?php $this->load->view('staf/layout/footer'); ?>
