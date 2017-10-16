<?php 
  $action = base_url($slug);
  if(!empty($id)) {
    $action .= '/edit';
    $title .= '&nbsp;Ubah';
  } else {
    $action .= '/add';
    $title .= '&nbsp;Tambah';
  }
  $judul = empty($pengumuman['judul']) ? "" : $pengumuman['judul'];
  $konten = empty($pengumuman['konten']) ? "" : $pengumuman['konten'];
  $tanggal = empty($pengumuman['tanggal']) ? "" : $pengumuman['tanggal'];
  $status = empty($pengumuman['status']) ? "" : $pengumuman['status'];
  $operator = empty($pengumuman['id_operator']) ? "" : $pengumuman['id_operator'];
?>
<!-- form pendaftaran -->
<div class="col-xs-12 col-sm-3"></div>
<div class="col-xs-12 col-sm-6">
  <form id="form-pengumuman" action="<?= $action;?>" method="post">    
    <div class="panel panel-primary form-daftar-offline">
      <div class="panel-body daftar">
        <?php if(!empty($id)) {?><input type="hidden" name="id" value="<?= $id; ?>"><?php }?>
        <div class="form-group">
          <input class="form-control input" type="text" placeholder="Judul" name="judul" value="<?= $judul; ?>" required>
        </div>
        <div class="form-group">  
          <input id="konten" type="hidden" name="konten">      
          <div class="editor"></div>        
        </div>
        <div class="form-group">                               
          <input class="form-control date" name="tanggal" type="text" placeholder="Tanggal" value="<?= $tanggal; ?>" required>               
        </div>  
        <?php if(!empty($id)) {?>
        <div class="form-group">        
          <select class="form-control"  name="status">
            <option <?= ($status == 'aktif') ? "selected" : "";?> value="aktif">Aktif</option>
            <option <?= ($status == 'tidak aktif') ? "selected" : "";?> value="tidak aktif">Tidak Aktif</option>
          </select>          
        </div>  
        <?php }?>                                             
        <div class="col-xs-12 text-center">
          <a href="<?= base_url($slug); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
          <input type="submit" class="btn btn-success" value="Simpan">     
        </div>      
      </div>
    </div>
  </form>
</div>
<div class="col-xs-12 col-sm-3"></div>

<script src="<?= base_url('assets/js/quill.min.js'); ?>"></script>
<script>
  var editor = new Quill('.editor', {
    theme: 'snow',
    placeholder: 'Konten ...',
  });
  var val = <?= empty($konten) ? '""' : $konten; ?>;
  editor.setContents(val);

  $("#form-pengumuman").submit(function (e) {
    val = editor.getContents();
    $("#konten").val(JSON.stringify(val));
  });
</script>