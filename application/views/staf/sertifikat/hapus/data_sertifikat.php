            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data Sertifikat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-certificate icon-menu" aria-hidden="true"></i> Data Sertifikat
                            </li>
                        </ol>
                    </div>
                </div><br>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table --> 

                <div class="pencarian">

                        <form method="get" action="">

                            <div class="col-md-3 col-sm-2 col-xs-2 input-group">
                                <input class="form-control" name="" placeholder="Masukkan Nama Siswa" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Cari</button>
                                </span>
                            </div>
                        </form>                    
                    
                </div>

                <a href="<?php echo base_url() ?>staf/sertifikat/cari" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>                
                <div><br></div>     

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Target Level</th>
                                <th>Keterangan</th><!-- 
                                <th>Pengambilan</th>
                                <th>Pemberi</th>    -->                           
                            </tr>
                        </thead>
                        <tbody>  

                        <?php
                        $no = 1;
                        foreach ($dataSertifikat as $data) : //ngabsen data
                        ?>

                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $data->nama_siswa; ?></td>
                                <td><?php echo $data->target_level; ?></td>
                                <td><?php echo $data->keterangan; ?></td><!--   
                                <td><?php echo $data->tgl_mengambil; ?></td>
                                <td><?php echo $data->pemberi; ?></td> -->
                                <td>
                                    <a href="<?php echo base_url();?>staf/sertifikat/tampil_sertifikat/<?php echo $data->id_sertifikat; ?>" class="btn btn-sm btn-info">Print</a>
                                    &nbsp                                    
                                    <a href="<?php echo base_url();?>staf/sertifikat/detail_sertifikat/<?php echo $data->id_sertifikat; ?>" class="btn btn-sm btn-primary">Detail</a>
                                    &nbsp
                                    <a href="<?php echo base_url();?>staf/sertifikat/rubah/<?php echo $data->id_sertifikat; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                                    <!-- &nbsp
                                    <a href="<?php echo base_url();?>staf/sertifikat/hapus/<?php echo $data->id_sertifikat; ?>" class="btn btn-sm btn-danger">Hapus</a> -->
                                </td>                                                 
                            </tr>
                        
                        <?php
                            endforeach;
                        ?>                           

                        </tbody>
                    </table>

                    <div class="col-md-12 text-right" style="padding-right: 0px !important;">
                        <nav><ul class="pagination" style="margin-top:0px"><li class="active"><a>1</a></li><li><a href="" data-ci-pagination-page="2" rel="next">Next</a></li></ul></nav>
                    </div>

                </div> 

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
