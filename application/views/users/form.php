<?php 
  $action = base_url() . $slug;
  if(!empty($id)) {
    $action .= '/edit';
    $title .= '&nbsp;Ubah';
  } else {
    $action .= '/add';
    $title .= '&nbsp;Tambah';
  }
?>
<!-- form pendaftaran -->
<div class="col-xs-12 col-sm-3"></div>
<div class="col-xs-12 col-sm-6">
  <form action="<?= $action;?>" enctype="multipart/form-data" method="post">    
    <div class="panel panel-primary form-daftar-offline">
      <?php 
          $mo = $this->load->model('m_users');
          $this->load->library('session');
          $username = empty($user['username']) ? "" : $user['username'];
          $nama = empty($user['nama']) ? "" : $user['nama'];
          $email = empty($user['email']) ? "" : $user['email'];
          $alamat = empty($user['alamat']) ? "" : $user['alamat'];
          $tgl = empty($user['tgl_lahir']) ? "" : $user['tgl_lahir'];
          $telpon = empty($user['telpon']) ? "" : $user['telpon'];
          $foto = empty($user['foto']) ? "" : $user['foto'];
          $status = empty($user['status']) ? "" : $user['status'];
      ?> 
      <div class="panel-body daftar">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <?php if($this->session->level == 1) {?>
        <div class="form-group margin">
          <?php if($slug == 'operator') {
             $nik = empty($id) ? "" : $mo->m_users->get_meta($id, 'nik')['nilai_meta']; ?>
            <input class="form-control input" placeholder="NIK" name="nik" value="<?= $nik; ?>">
          <?php } else if($slug == 'pengajar') {
            $kp = empty($id) ? "" : $mo->m_users->get_meta($id, 'kode_pengajar')['nilai_meta']; ?>
            <input class="form-control input" placeholder="Kode Pengajar" name="kode_pengajar" value="<?= $kp; ?>">
          <?php } else if($slug == 'siswa') {
            $ks = empty($id) ? "" : $mo->m_users->get_meta($id, 'kode_siswa')['nilai_meta'];?>
            <input class="form-control input" placeholder="Kode Siswa" name="kode_siswa" value="<?= $ks; ?>">
          <?php }?>
        </div>
        <?php }?>
        <div class="form-group margin">        
          <input class="form-control input" placeholder="User Name" name="username" value="<?= $username; ?>">          
        </div>
        <div class="form-group margin">        
          <input class="form-control input" placeholder="Nama" name="nama" value="<?= $nama; ?>">          
        </div>
        <div class="form-group margin">
          <input class="form-control input" type="email" placeholder="Email" name="email" value="<?= $email; ?>">
        </div>
        <div class="form-group margin">        
          <input class="form-control input" placeholder="Alamat" name="alamat" value="<?= $alamat; ?>">          
        </div>
        <div class="form-group">                               
          <div id="c-date" class="input-group date" data-provide="datepicker" style="width: 100% !important;">
              <input class="form-control date" name="tgl_lahir" type="text" placeholder="Tanggal Lahir" value="<?= $tgl; ?>">
          </div>                  
        </div>
        <div class="form-group margin">        
          <input class="form-control input" placeholder="No Telpon" name="telpon" value="<?= $telpon; ?>">          
        </div>   
        <?php if(!empty($id)) {?>
        <div class="form-group margin">        
          <select class="form-control input"  name="status">
            <option <?= ($status == 'aktif') ? "selected" : "";?> value="aktif">Aktif</option>
            <option <?= ($status == 'tidak aktif') ? "selected" : "";?> value="tidak aktif">Tidak Aktif</option>
          </select>          
        </div>  
        <?php }?> 
        <div class="form-group margin">        
          <input class="form-control input" accept="image/*" placeholder="Foto" name="foto" type="file" value="<?= $foto; ?>">          
          <?php if(!empty($id) && $this->session->level == 1) {?>
            <img width="200" style="margin:15px 0; border: 1px solid #235AA3; padding: 10px;" src="<?= empty($user['foto']) ? base_url().'assets/images/no-profile-image.png' : $user['foto']; ?>" alt="<?= $user['nama'];?> photo">
          <?php }?>
        </div>              
        <div class="form-group margin">        
          <input class="form-control input" placeholder="Password <?= !empty($id) ? 'Baru': '';?>" name="password" type="password" autocomplete="off">          
        </div>                                              
        <div class="col-xs-12 text-center">
          <a href="<?php echo base_url(). $slug; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
          <input type="submit" class="btn btn-success" value="Simpan">     
        </div>      
      </div>
    </div>
  </form>
</div>
<div class="col-xs-12 col-sm-3"></div>
