<!DOCTYPE html>
<html>
<head>
  <title>Print Sertifikat</title>
  <style type="text/css">
    .img-sertifikat {
      text-align: center;
      margin-left: 20px;
    }

    .sertifikat {
      width: 450px;
      height: auto;
      position: absolute;
      top: 250px;
      right: 290px;
      text-align: center;
      font-size: 34px;
    }

    .target_level{
      width: 300px;
      height: auto;
      font-size: 15px;
      font-weight: bold;
      top: 370px;
      right: 370px;
      text-align: center;
      position: absolute;
      text-transform: uppercase;
    }

    .tgl{
      width: 300px;
      height: auto;
      font-size: 15px;
      font-weight: bold;
      top: 395px;
      right: 370px;
      text-align: center;
      position: absolute;
      text-transform: uppercase;
    }

    .pengajar{
      position: absolute;
      width: 250px;
      height: auto;
      right: 570px;
      top: 495px;
      font-size: 18px;
      text-align: center;    
      text-transform: uppercase;
    }
  </style>
</head>
<body>  
  <img class="img-sertifikat" src="<?= base_url('assets/images/sertifikat.png');?>"></img>
  <div class="sertifikat"><?= $sertifikat['nama'] ?></div>
  <div class="target_level"><?= $sertifikat['target_level'] ?></div>
  <div class="tgl"><?= $sertifikat['tgl_terbit'] ?></div>
  <div class="pengajar"><?= $sertifikat['nama_pengajar'] ?></div>
</body>
</html>