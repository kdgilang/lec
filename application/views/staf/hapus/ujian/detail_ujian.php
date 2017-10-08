            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Detail Siswa</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Detail Siswa
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->                
                <div class="box-body">
                    <table class="table table-striped" width="100%">                      
                        <tbody> 

                            <tr>
                                <td width="400px"><b>Nama</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['nama'] ?></td>               
                            </tr>
                            <tr>
                                <td><b>Alamat</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['alamat'] ?></td>               
                            </tr>
                            <tr>
                                <td><b>Telpon</b></td>
                                <td width="30px">:</td>
                                <td><?php echo $siswa['telpon'] ?></td>                      
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['email'] ?></td>                     
                            </tr>
                            <tr>
                                <td><b>Usia</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['usia'] ?></td>                      
                            </tr>
                            <tr>
                                <td><b>Pendidikan Akhir</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['pendidikan_akhir'] ?></td>    
                            </tr>
                            <!-- <tr>
                                <td><b>Domisili</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['domisili'] ?></td>            
                            </tr> -->
                            <tr>
                                <td><b>Program</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['program'] ?></td>            
                            </tr>
                            <!-- <tr>
                                <td><b>Password</b></td>
                                <td>:</td>
                                <td><?php echo $siswa['password'] ?></td>            
                            </tr> -->

                        </tbody>

                    </table>
                            <div>
                                <a href="<?php echo base_url() ?>staf/siswa/data_siswa" class="btn btn-default">Kembali</a>
                            </div>
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
