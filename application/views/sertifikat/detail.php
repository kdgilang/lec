<?php
  $status = empty($sertifikat['status']) ? "" : $sertifikat['status'];
  $tgl_terbit = empty($sertifikat['tgl_terbit']) ? "" : $sertifikat['tgl_terbit'];
  $tgl_cetak = empty($sertifikat['tgl_cetak']) ? "" : $sertifikat['tgl_cetak'];
  $tgl_ambil = empty($sertifikat['tgl_ambil']) ? "" : $sertifikat['tgl_ambil'];
  $operator = empty($sertifikat['id_operator']) ? "" : $sertifikat['id_operator'];
  $siswa = empty($sertifikat['id_siswa']) ? "" : $sertifikat['id_siswa'];
  $pengajar = empty($sertifikat['id_pengajar']) ? "" : $sertifikat['id_pengajar'];
  $operator = $this->m_users->detail_users($operator);
  $siswa = $this->m_users->detail_users($siswa);
  $pengajar = $this->m_users->detail_users($pengajar);
?>
<div class="box-body">
 <div class="box-body">
    <table class="table table-striped" width="100%">                      
        <tbody> 
            <tr>
                <td><b>Status Sertifikat</b></td>
                <td>:</td>
                <td><?= $status;?></td>                    
            </tr>
            <tr>
                <td><b>Tanggal Terbit</b></td>
                <td>:</td>
                <td><?= $tgl_terbit; ?></td>                           
            </tr>
            <tr>
                <td><b>Tanggal Cetak</b></td>
                <td>:</td>
                <td><?= $tgl_cetak; ?></td>                        
            </tr>
            <tr>
                <td><b>Tanggal Ambil</b></td>
                <td>:</td>
                <td><?= $tgl_ambil; ?></td>                           
            </tr>
            <tr>
                <td><b>Nama Operator</b></td>
                <td>:</td>
                <td><?= $operator['nama']; ?></td>                           
            </tr>
            <tr>
                <td><b>Nama Pengajar</b></td>
                <td>:</td>
                <td><?= $pengajar['nama']; ?></td>                           
            </tr>
            <tr>
                <td><b>Nama Siswa</b></td>
                <td>:</td>
                <td><?= $siswa['nama']; ?></td>                           
            </tr> 
        </tbody>
    </table>
    <div>
        <a href="<?= base_url('sertifikat'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
    </div>
</div>   