            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Pengumuman</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-bullhorn icon-menu" aria-hidden="true"></i></i> Data Pegumuman
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <a href="<?php echo base_url() ?>staf/pengumuman/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>                
                <div><br></div>             
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Isi</th> 
                                <th>User</th>
                                <th>Status</th>                                        
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $no = 1;
                        foreach($pengumuman as $list){ 
                        ?>

                            <tr>
                                <td><?php echo $list['tanggal'] ?></td>
                                <td><?php echo $list['judul'] ?></td>
                                <td><?php echo $list['isi'] ?></td>
                                <td><?php echo $list['nama_user'] ?></td>
                                <td><?php echo $list['status_pengumuman'] ?></td>
                                <td width="140px">
                                    <a href="<?php echo base_url();?>staf/pengumuman/rubah/<?php echo $list['id_pengumuman'] ?>" class="btn  btn-sm btn-warning">Ubah</a>
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
