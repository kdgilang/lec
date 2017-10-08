            
        <?php $this->load->view('pelajar/layout/header');?>
        <?php $this->load->view('pelajar/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Siswa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Data Siswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <a href="<?php echo base_url() ?>pelajar/siswa/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Siswa</a>                
                <div><br></div>             
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Program</th> 
                                <th>Pembayaran</th>                               
                            </tr>
                        </thead>
                        <tbody>  

                        <?php 
                        $no = 1;
                        foreach($siswa as $list){ 
                        ?>

                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $list['nim'] ?></td>
                                <td><?php echo $list['nama'] ?></td>
                                <td><?php echo $list['program'] ?></td> 
                                <td><?php echo $list['pembayaran'] ?></td> 
                                <td>
                                    <a href="<?php echo base_url();?>pelajar/siswa/detail_siswa/<?php echo $list['id_pendaftaran'] ?>" class="btn btn-sm btn-primary">Detail</a>
                                    &nbsp
                                    <a href="<?php echo base_url();?>pelajar/siswa/rubah/<?php echo $list['id_pendaftaran'] ?>" class="btn  btn-sm btn-warning">Ubah</a>
                                    &nbsp
                                    <a href="<?php echo base_url();?>pelajar/siswa/hapus/<?php echo $list['id_pendaftaran'] ?>" class="btn btn-sm btn-danger">Hapus</a>  
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
