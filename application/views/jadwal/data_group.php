            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

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
                                <i class="fa fa-fw fa-table"></i></i> Data Kelas
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->       

                <ul class="nav nav-tabs">
                    <li class="active"><a href="<?php echo base_url() ?>jadwal/data_group">Kelas </a></li>
                    <li><a href="<?php echo base_url() ?>jadwal/data_jadwal_private">Private</a></li>
                    <!-- <li><a href="#">Private</a></li>
                    <li><a href="#">Menu 3</a></li> -->
                </ul>
                <br>

                <a href="<?php echo base_url() ?>jadwal/tambah" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Group</a>
                <div><br></div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Group</th> 
                                <th>Status</th>
                                <th>Tipe Kelas</th>     
                                <th>Aksi</th>         
                            </tr>
                        </thead>
                        <tbody>  

                        <?php
                        $no = 1;
                        foreach ($dataGroup as $data) : //ngabsen data
                        ?>

                            <tr>
                                <td width="40px"><?= $no++; ?></td>
                                <td><?= $data->nama_kelas; ?></td>
                                <td><?= $data->status; ?></td>
                                <td><?= $data->tipe; ?></td>
                                <td width="600px">
                                    <a href="<?= base_url();?>kelas/absensi/<?php echo $data->id; ?>" class="btn btn-sm btn-success">Kelola Kelas</a>
                                    &nbsp
                                    <a href="<?= base_url();?>kelas/form/<?php echo $data->id; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                                </td>        
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
