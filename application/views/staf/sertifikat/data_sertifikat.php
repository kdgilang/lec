
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

				<div class="wrap">					

					<div class="pencarian">
                        <form method="post" action="<?php echo site_url('staf/sertifikat/data_sertifikat/'); ?>">
                            <div class="col-md-3 col-sm-2 col-xs-2 input-group">
                                <input class="form-control" name="cari" placeholder="Cari nama, target level" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" name="q" type="submit">Cari</button>
                                </span>
                            </div>
                	</div>

                	<a href="<?php echo base_url() ?>staf/sertifikat/cari" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</a>                
                	<div><br></div> 

					<div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
								<th>No</th>
								<th>Nama Siswa</th>
								<th>Target Level</th>
								<th>Keterangan</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = $this->uri->segment('5') + 1;
							if (count($sertifikat) > 0) {
								foreach($sertifikat as $row)
								{
									echo "<div class=\"letter\">";
									?>

									<tr>
										<td valign="top"><?php echo $no++?></td>
										<td valign="top"><?php echo $row['nama_siswa']; ?></td>
										<td valign="top"><?php echo $row['target_level']; ?></td>
										<td valign="top"><?php echo $row['keterangan']; ?></td>
										<td>
		                                    <a href="<?php echo base_url();?>staf/sertifikat/tampil_sertifikat/<?php echo $row['id_sertifikat'] ?>" class="btn btn-sm btn-info">Print</a>
		                                    &nbsp                                   
		                                    <a href="<?php echo base_url();?>staf/sertifikat/detail_sertifikat/<?php echo $row['id_sertifikat'] ?>" class="btn btn-sm btn-primary">Detail</a>
		                                    &nbsp
		                                    <a href="<?php echo base_url();?>staf/sertifikat/rubah/<?php echo $row['id_sertifikat'] ?>" class="btn  btn-sm btn-warning">Ubah</a>
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
					</form>

					</div> 
				</div>
	
	 </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

	<?php $this->load->view('layout/footer'); ?>


