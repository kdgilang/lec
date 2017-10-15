            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Detail Sertifikat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i></i> Detail Sertifikat
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
                                <td width="400px"><b>Nama Siswa</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['nama_siswa'] ?></td>               
                            </tr>    
                            <tr>
                                <td width="400px"><b>Keterangan</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['keterangan'] ?></td>               
                            </tr>   
                            <tr>
                                <td width="400px"><b>Pengambilan</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['tgl_mengambil'] ?></td>               
                            </tr>    
                            <tr>
                                <td width="400px"><b>Pemberi</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['pemberi'] ?></td>               
                            </tr>  
                            <tr>
                                <td width="400px"><b>Tanggal Cetak</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['tgl_cetak'] ?></td>               
                            </tr>   
                            <tr>
                                <td width="400px"><b>Tanggal Terbit</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['tgl_terbit'] ?></td>               
                            </tr>    
                            <tr>
                                <td width="400px"><b>Nama Pengajar</b></td>
                                <td>:</td>
                                <td><?php echo $sertifikat['nama_pengajar'] ?></td>               
                            </tr>                             

                        </tbody>

                    </table>      

                         <div>
                                <a href="<?php echo base_url() ?>staf/sertifikat/data_sertifikat" class="btn btn-default">Kembali</a>
                            </div>                          
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
