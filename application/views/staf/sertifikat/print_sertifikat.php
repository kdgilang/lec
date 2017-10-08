<!DOCTYPE html>
<html>
<head>
  <title>Print Sertifikat</title>
  <style type="text/css">
    .img-sertifikat {
      text-align: center;
      margin-left: 20px;
    }

    .nama_sertifikat {
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

    .nama_pengajar{
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

  <img class="img-sertifikat" src="http://localhost/lec/assets/images/sertifikat_pdf.png" width="96%"></img>

  <div class="nama_sertifikat"><?php echo $sertifikat['nama_siswa'] ?></div>
  <div class="target_level"><?php echo $sertifikat['target_level'] ?></div>
  <div class="tgl"><?php echo $sertifikat['tgl_terbit'] ?></div>
  
  <div class="nama_pengajar"><?php echo $sertifikat['nama_pengajar'] ?></div>    
  



</body>
</html>