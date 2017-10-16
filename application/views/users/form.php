<?php 
  $action = base_url($slug);
  if(!empty($id)) {
    $action .= '/edit';
    $title .= '&nbsp;Ubah';
  } else {
    $action .= '/add';
    $title .= '&nbsp;Tambah';
  }
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
  $meta = !empty($id) ? $mo->m_users->get_meta($id, 'pembayaran') : '';
  $meta = !empty($meta) ? $meta['nilai_meta'] : ''; 
?>
<!-- form pendaftaran -->
<div class="col-xs-12 col-sm-3"></div>
<div class="col-xs-12 col-sm-6">
  <form action="<?= $action;?>" enctype="multipart/form-data" method="post" autocomplete="off">    
    <div class="panel panel-primary form-daftar-offline">
      <div class="panel-body daftar">
        <?php if(!empty($id)) {?><input type="hidden" name="id" value="<?= $id; ?>"><?php }?>
        <?php if($this->session->level == 1) {?>
        <div class="form-group">
          <?php if($slug == 'operator') {
             $nik = empty($id) ? "" : $mo->m_users->get_meta($id, 'nik')['nilai_meta']; ?>
            <input class="form-control input" placeholder="NIK" name="nik" value="<?= $nik; ?>" required>
          <?php } else if($slug == 'pengajar') {
            $kp = empty($id) ? "" : $mo->m_users->get_meta($id, 'kode_pengajar')['nilai_meta']; ?>
            <input class="form-control input" placeholder="Kode Pengajar" name="kode_pengajar" value="<?= $kp; ?>" required>
          <?php } else if($slug == 'siswa') {
            $ks = empty($id) ? "" : $mo->m_users->get_meta($id, 'kode_siswa')['nilai_meta'];?>
            <input class="form-control input" placeholder="Kode Siswa" name="kode_siswa" value="<?= $ks; ?>" required>
          <?php }?>
        </div>
        <?php }?>
        <div class="form-group">        
          <input class="form-control input" placeholder="User Name" name="username" value="<?= $username; ?>" required>          
        </div>
        <div class="form-group">        
          <input class="form-control input" placeholder="Nama" name="nama" value="<?= $nama; ?>" required>          
        </div>
        <div class="form-group">
          <input class="form-control input" type="email" placeholder="Email" name="email" value="<?= $email; ?>" required>
        </div>
        <div class="form-group">        
          <input class="form-control input" placeholder="Alamat" name="alamat" value="<?= $alamat; ?>" required>          
        </div>
        <div class="form-group">
          <input class="form-control date" name="tgl_lahir" type="text" placeholder="Tanggal Lahir" value="<?= $tgl; ?>" required>                
        </div>
        <div class="form-group">        
          <input class="form-control input" placeholder="No Telpon" name="telpon" value="<?= $telpon; ?>" required>          
        </div>
        <div class="form-group"> 
          <select class="form-control input"  name="pembayaran" required>
            <option>Status Pembayaran</option>
            <option <?= ($meta == 'lunas') ? "selected" : "";?> value="lunas">Lunas</option>
            <option <?= ($meta == 'belum lunas') ? "selected" : "";?> value="belum lunas">Belum Lunas</option>
          </select>
        </div>    
        <?php if(!empty($id) && $this->session->level == 1) {?>
        <div class="form-group">        
          <select class="form-control input"  name="status">
            <option <?= ($status == 'aktif') ? "selected" : "";?> value="aktif">Aktif</option>
            <option <?= ($status == 'tidak aktif') ? "selected" : "";?> value="tidak aktif">Tidak Aktif</option>
          </select>          
        </div>  
        <?php }?> 
        <div class="form-group">        
          <input class="form-control input" accept="image/*" placeholder="Foto" name="foto" type="file" <?= !empty($id) ? "" : "required";?> >         
          <?php if(!empty($id)) {?>
            <input class="form-control input" name="old_foto" type="hidden" value="<?= $foto; ?>"> 
            <img width="200" style=:15px 0; border: 1px solid #235AA3; padding: 10px;" src="<?= empty($user['foto']) ? base_url('assets/images/no-profile-image.png') : $user['foto']; ?>" alt="<?= $user['nama'];?> photo">
          <?php }?>
        </div>              
        <div class="form-group">     
          <input type="password" class="form-control input" placeholder="Password <?= !empty($id) ? 'Baru': '';?>" name="password" <?= !empty($id) ? '': 'required';?>>          
        </div>                                              
        <div class="col-xs-12 text-center">
          <a href="<?php echo base_url($slug); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
          <input type="submit" class="btn btn-success" value="Simpan">     
        </div>      
      </div>
    </div>
  </form>
</div>
<div class="col-xs-12 col-sm-3"></div>
