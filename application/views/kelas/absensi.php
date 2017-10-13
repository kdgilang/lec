<?php 
    $pengajar = $this->m_users->detail_users($kelas->id_pengajar);
    $siswa = !empty($kelas->id_siswa) ? explode(',', $kelas->id_siswa) : array();
    $siswa = $this->m_users->in_users($siswa);
?>
<h4><center><b>DAFTAR KEHADIRAN SISWA</b></center></h4>
<b>Nama Pengajar : <?= $pengajar['nama']; ?></b>
<br><br>
<div class="table-responsive"> 
    <table valign="center" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>H = Hadir</th>
                <th>A = Alpha</th>
                <th colspan="15" class="pertemuan">Pertemuan</th>
            </tr>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th class="hadir">1</th>
                <th class="hadir">2</th>
                <th class="hadir">3</th>
                <th class="hadir">4</th>
                <th class="hadir">5</th>
                <th class="hadir">6</th>
                <th class="hadir">7</th>
                <th class="hadir">8</th>
                <th class="hadir">9</th>
                <th class="hadir">10</th>
                <th class="hadir">11</th>
                <th class="hadir">12</th>
                <th class="hadir">13</th>
                <th class="hadir">14</th>
                <th class="hadir">15</th>
            </tr>
        </thead>
        <tbody>      
        <?php if(!empty($siswa))  { $i=1;?>
            <?php foreach($siswa as $val) {?>             
            <tr>
                <td><?= $i;?></td>
                <td><?= $val['nama'];?></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
                <td class="hadir"><input type="checkbox" name="absensi[]"></td>
            </tr> 
            <?php $i++; }?>
        <?php }?>
        </tbody>
    </table>  
    <a href="<?= base_url('kelas'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>             
</div>    