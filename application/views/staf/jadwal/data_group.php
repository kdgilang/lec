            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Jadwal Group</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Data Jadwal Group
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->       

                <ul class="nav nav-tabs">
                    <li class="active"><a href="<?php echo base_url() ?>staf/jadwal/data_group">Group</a></li>
                    <li><a href="<?php echo base_url() ?>staf/jadwal/data_jadwal_private">Private</a></li>
                </ul>
                <br>

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
                                <td width="600px">
                                    <a href="<?php echo base_url();?>staf/jadwal/kelola_group/<?php echo $data->id_kelas; ?>" class="btn btn-sm btn-success">Lihat Jadwal</a>      
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
