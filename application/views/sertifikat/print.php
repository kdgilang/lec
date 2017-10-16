<!DOCTYPE html>
<html>
<head>
  <title>Print Sertifikat</title>
  <style type="text/css">
    .img-sertifikat {
      text-align: center;
      margin-left: 20px;
      width: 100%;
    }
    .siswa {
      font-weight: bold;
      position: absolute;
      top: 977px;
      text-align: center;
      font-size: 57px;
      left: 960px;
      text-transform: uppercase;
      width: 1592px;
    }
    .tgl{
      position: absolute;
      font-weight: bold;
      top: 1350px;
      text-align: center;
      font-size: 57px;
      left: 1610px;
      text-transform: uppercase;
      width: 300px;
    }
    .pengajar{
      position: absolute;
      width: 250px;
      top: 1790px;
      font-size: 32px;
      text-align: center;
      left: 995px;
      text-transform: uppercase;
    }
    .container {
      position: relative;
      height: 2480px;
      width: 3508px;
    }
  </style>
</head>
<body>
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
  <div class="container">
  <img height="2480" width="3508" src="<?= base_url('assets/images/sertifikat.png');?>"></img>
  <div class="siswa"><?= $siswa['nama']; ?></div>
  <div class="tgl"><?= $tgl_terbit; ?></div>
  <div class="pengajar"><?= $pengajar['nama']; ?></div>
  </div>
</body>
</html>