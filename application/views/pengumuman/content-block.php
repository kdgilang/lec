<br>
<script src="<?= base_url('assets/js/quill.min.js'); ?>"></script>
<div class="container">
<?php 
if(!empty($pengumuman)) :
$no = 1;
  foreach($pengumuman as $val) { 
    if($val->status == 'aktif') {
      $operator = $this->m_users->detail_users($val->id_operator); ?> 
      <div class="col-xs-12 col-sm-6 col-md-4 blog">
        <div class="panel panel-default">
            <h4 class="panel-body"><?= $val->judul;?></h4>
            <div class="panel-heading">
                <span class="meta dates"><span class="icon-menu fa fa-clock-o"></span><?= $val->tanggal;?></span>
                <span class="meta author"><span class="icon-menu fa fa-user-circle"></span><?= $operator['username']; ?></span>
            </div>
            <div class="panel-body">
              <div class="editor-<?= $no;?> lists-editor"></div>
              <a href="<?= base_url('pengumuman/detail/'.$val->id); ?>" class="btn btn-primary">Detail Pengumuman <span class="fa fa-arrow-right"></span></a>
            </div>
        </div>
      </div>
      <script>
        var editor_<?= $no;?> = new Quill('.editor-<?= $no;?>', { readOnly: true}),
            val = <?= empty($val->konten) ? '""' : $val->konten; ?>;
        editor_<?= $no;?>.setContents(val);
        var text = $(".editor-<?= $no;?>").text().slice(0, 50);

        editor_<?= $no;?>.setText(text+"...");
      </script>
      <?php $no++;
    }
  } 
endif;
?>      
</div>