            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Detail Jadwal Private</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-calendar icon-menu" aria-hidden="true"></i>Detail Jadwal Private
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->

                <a href="<?php echo base_url() ?>jadwal/tambah_private/<?php echo $id_pendaftaran; ?>" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Jadwal</a> 
                <div><br></div> 

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hari</th>  
                                <th>Jam</th>
                                <th>Pengajar</th>                                
                            </tr>
                        </thead>
                        <tbody>                       

                        <?php
                        $no = 1;
                        foreach ($data_jadwal as $data) : //ngabsen data
                        ?>    
                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $data->hari; ?></td>
                                <td><?php echo $data->jam; ?></td>
                                <td><?php echo $data->nama_pengajar; ?></td>
                                <td>
                                    <a href="<?php echo base_url();?>jadwal/hapus_private/<?php echo $data->id_jadwal; ?>" class="btn btn-sm btn-danger">Hapus</a>  
                                </td>
                            </tr>                                                                  

                        <?php
                            endforeach;
                        ?> 
                        
                        </tbody>
                    </table>
                </div>      

                 <a href="<?php echo base_url(). 'jadwal/data_jadwal_private'; ?>" class="btn btn-default">Kembali</a>        

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
