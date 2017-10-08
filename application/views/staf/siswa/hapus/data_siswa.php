            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

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
                <a href="<?php echo base_url() ?>staf/siswa/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Siswa</a>                
                <div><br></div>             
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nim</th>
                                <th>Nama</th>
                                <th>Program</th>                                
                            </tr>
                        </thead>
                        <tbody>  

                        <?php 
                        $no = 1;
                        foreach($siswa as $list){ 
                        ?>

                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td>130030480</td>
                                <td><?php echo $list['nama'] ?></td>
                                <td>General English</td>  
                                <td>
                                    <a href="<?php echo base_url();?>staf/siswa/detail_siswa/<?php echo $list['id_pendaftaran'] ?>" class="btn btn-sm btn-primary">Detail</a>
                                    &nbsp
                                    <a href="<?php echo base_url();?>staf/siswa/rubah/<?php echo $list['id_pendaftaran'] ?>" class="btn  btn-sm btn-warning">Ubah</a>
                                    &nbsp
                                    <a href="<?php echo base_url();?>staf/siswa/hapus/<?php echo $list['id_pendaftaran'] ?>" class="btn btn-sm btn-danger">Hapus</a>  
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
