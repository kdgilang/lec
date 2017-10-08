            
        <?php $this->load->view('pelajar/layout/header');?>
        <?php $this->load->view('pelajar/layout/side'); ?>

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
                    <li class="active"><a href="<?php echo base_url() ?>pelajar/jadwal/data_group">Group</a></li>
                    <li><a href="<?php echo base_url() ?>pelajar/jadwal/data_jadwal_private">Private</a></li>
                    <!-- <li><a href="#">Private</a></li>
                    <li><a href="#">Menu 3</a></li> -->
                </ul>
                <br>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Group</th>   
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
                                <td>
                                    <a href="<?php echo base_url();?>pelajar/jadwal/cek_jadwal/<?php echo $data->id_kelas; ?>" class="btn btn-sm btn-success">Cek Jadwal</a>
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
