            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Hasil Ujian</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-file-text-o icon-menu" aria-hidden="true"></i> Data Hasil Ujian
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table --> 
                <a href="<?php echo base_url() ?>staf/ujian/cari" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>
                <div><br></div>

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama</th> 
                                <th>Kode Materi</th>  
                                <th>Nama Materi</th> 
                                <th>Nilai</th>
                                <th>Total</th>                                            
                            </tr>
                        </thead>
                        <tbody>   

                        <?php
                        $no = 1;
                        foreach ($hasilUjian as $data) : //ngabsen data
                        ?>                   

                            <tr>                                
                                <td width="40px"><?php echo $no++?></td> 
                                <td><?php echo $data->nim; ?></td> 
                                <td><?php echo $data->nama; ?></td>
                                <td><?php echo $data->kode_materi; ?></td>
                                <td><?php echo $data->nama_materi; ?></td>
                                <td><?php echo $data->nilai; ?></td>
                                <td><?php echo $data->total; ?></td>
                                <td>                                   
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
