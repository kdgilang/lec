<?php 
  $judul = empty($pengumuman['judul']) ? "" : $pengumuman['judul'];
  $konten = empty($pengumuman['konten']) ? "" : $pengumuman['konten'];
  $tanggal = empty($pengumuman['tanggal']) ? "" : $pengumuman['tanggal'];
  $status = empty($pengumuman['status']) ? "" : $pengumuman['status'];
  $operator = empty($pengumuman['id_operator']) ? "" : $pengumuman['id_operator'];
  $author = "";
  if(!empty($operator)) {
      $operator = $this->m_users->detail_users($operator);
      $author =  $operator['nama']. '('.$operator['username'].')';
  }
?>
<div class="container">
    <div class="panel panel-default">
        <h2 class="panel-body"><?= $judul;?></h2>
        <div class="panel-heading">
            <span class="meta dates"><span class="icon-menu fa fa-clock-o"></span><?= $tanggal;?></span>
            <span class="meta author"><span class="icon-menu fa fa-user-circle"></span><?= $author;?></span>
        </div>
        <div class="panel-body editor"></div>
    </div>
    <div>
        <a href="<?= base_url('pengumuman'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
    </div>
</div>

<script src="<?= base_url('assets/js/quill.min.js'); ?>"></script>
<script>
  var editor = new Quill('.editor', { readOnly: true}),
      val = <?= $konten; ?>;
  editor.setContents(val);
</script>