            
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
                </div><br>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->  

                <div class="pencarian">
                        <form method="post" action="<?php echo site_url('staf/siswa/data_siswa/'); ?>">
                            <div class="col-md-3 col-sm-2 col-xs-2 input-group">
                                <input class="form-control" name="cari" placeholder="Cari nama" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" name="q" type="submit">Cari</button>
                                </span>
                            </div>
                    </div>

                <a href="<?php echo base_url() ?>staf/siswa/tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Siswa</a>                
                <div><br></div>             
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <!-- <th width="120px">Id Pendaftaran</th> -->
                                <th>Nama Siswa</th>
                                <th>Target Level</th>
                                <th>Kelas</th>
                                <th>Pembayaran</th>
                                <th>Status</th> 
                                <th></th>                               
                            </tr>
                        </thead>
                        <tbody> 

                        <?php
                            $no = $this->uri->segment('5') + 1;
                            if (count($siswa) > 0) {
                                foreach($siswa as $row)
                                {
                                    echo "<div class=\"letter\">";
                                    ?>

                            <tr>
                                <td width="40px"><?php echo $no++?></td>
                                <td><?php echo $row['nama_siswa']; ?></td>
                                <td><?php echo $row['target_level']; ?></td>
                                <td><?php echo $row['kelas']; ?></td> 
                                <td><?php echo $row['pembayaran']; ?></td>
                                <td><?php echo $row['status_siswa']; ?></td> 
                                <td>
                                    <a href="<?php echo base_url();?>staf/siswa/detail_siswa/<?php echo $row['id_pendaftaran'] ?>" class="btn btn-sm btn-primary">Detail</a>
                                    &nbsp
                                    <a href="<?php echo base_url();?>staf/siswa/rubah/<?php echo $row['id_pendaftaran'] ?>" class="btn  btn-sm btn-warning">Ubah</a>
                                </td>                                                    
                            </tr>                        
                       
                        <?php
                                    echo "</div>";
                                }
                                echo "<tr><td colspan='6'><div style='background:000; float:right;'>".$this->pagination->create_links()."</div></td></tr>";
                            } else {
                                echo "<tbody><tr><td colspan='8' style='padding:10px; background:#F00; border:none; color:#FFF;'>Hasil pencarian tidak ditemukan.</td></tr></tbody>";
                            }
                            ?>                          

                        </tbody>
                    </table>

                    <!-- <div class="col-md-12 text-right" style="padding-right: 0px !important;">
                        <nav><ul class="pagination" style="margin-top:0px"><li class="active"><a>1</a></li><li><a href="" data-ci-pagination-page="2" rel="next">Next</a></li></ul></nav>
                    </div> -->

                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
