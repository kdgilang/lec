<?php 
    $pengajar = $this->m_users->detail_users($kelas->id_pengajar);
    $siswa = !empty($kelas->id_siswa) ? explode(',', $kelas->id_siswa) : array();
    $siswa = !empty($siswa) ? $this->m_users->in_users($siswa) : "";
    $urlajax = base_url('kelas/update_absen/'.$kelas->id); 
    $pertemuan = $kelas->pertemuan;
?>
<h4><center><b>DAFTAR KEHADIRAN SISWA</b></center></h4>
<br>
<table class="table table-striped" width="100%">                      
    <tbody> 
        <tr>
            <td width="150px;"><b>Nama Pengajar</b></td>
            <td width="10px;">:</td>
            <td> <a href="<?=base_url('pengajar/detail/'.$pengajar['id']);?>" class="link"><?= $pengajar['nama']; ?></a></td>                    
        </tr>
    </tbody>
</table>
<br>
<div class="table-responsive"> 
	<form action="" id="form-absen">
	    <table valign="center" class="table table-bordered table-hover table-striped">
	        <thead>
	            <tr>
	                <th style="text-align: center;">H = Hadir</th>
	                <th style="text-align: center;">A = Alpha</th>
	                <th colspan="<?=$pertemuan;?>" class="pertemuan">Pertemuan</th>
	            </tr>
	        </thead>
	        <tbody>
	            <tr>
	                <td align="center"><strong>No</strong></td>
	                <td><strong>Nama</strong></td>
	                <?php for($j=1; $j<=$pertemuan; $j++) { ?>
	                <td class="hadir"><strong><?=$j;?></strong></td>
	                <?php } ?>
	            </tr>
	        <?php if(!empty($siswa))  { $i=0;?>
	            <?php foreach($siswa as $val) {?>             
	            <tr>
	                <td align="center"><?= $i+1;?></td>
	                <td><?= $val['nama'];?></td>
					<?php for($j=0; $j<$pertemuan; $j++) {
						$nama = 'absensi-'.$j;
						$where = array(
							'nama_meta' => $nama,
							'id_kelas' => $kelas->id
						); 
						$users = array();
						$meta = $this->m_kelas->get_meta($where);
						if(!empty($meta)) {
							$users = $meta->nilai_meta;
							$users = explode(",", $users);
						}
					?>
					<td class="hadir">
						<select class="checkabsen" name="absensi[<?=$j;?>][]">
							<option value="-1">A</option>
							<option <?= (in_array($val['id'], $users)) ? "selected" : "";?> value="<?=$val['id']?>">H</option>
						</select>
					</td>
	                <?php } ?>
	            </tr> 
	            <?php $i++; }?>
	        <?php }?>
	        </tbody>
	    </table>  
	</form>
    <a href="<?= base_url('kelas'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>             
</div>

<script>
	"use strict";
	var urlajax = "<?= $urlajax;?>";
	$(document).on('change', '.checkabsen', function () {
		$("#form-absen").submit();
	});
	$("#form-absen").submit(function (e) {
		var that = $(this),
			form = that.serialize();
		$.ajax(urlajax, {
			type: "post",
			dataType: "json",
			data: form,
			success: function (res) {
				console.log(res);
			}
		});
		e.preventDefault();
	});
</script>    