    <!-- table -->   
    <a href="<?= base_url($slug); ?>/form" class="btn btn-success"><i class="fa fa-plus"></i> Tambah <?= $title;?></a>                
    <br><br>     
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Tanggal</th> 
                    <th>Status</th> 
                    <th>Nama Operator</th>
                    <th>Aksi</th>                               
                </tr>
            </thead>
            <tbody>  

            <?php 
            if(!empty($pengumuman)) :
                $no = 1;
                foreach($pengumuman as $val) { 
                    $operator = $this->m_users->detail_users($val->id_operator);
                ?>                        
                <tr>
                    <td width="40px"><?= $no++?></td>
                    <td><?= $val->judul; ?></td>
                    <td width="140px"><span class="editor"></span></td>
                    <td><?= $val->tanggal; ?></td>  
                    <td><?= $val->status; ?></td>
                    <td><?= $operator['nama']. '('. $operator['username']; ?>)</td>  
                    <td>
                        <a href="<?= base_url($slug);?>/detail/<?= $val->id; ?>" class="btn btn-sm btn-primary">Detail</a>
                        <a href="<?= base_url($slug);?>/form/<?= $val->id; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                    </td>                                                    
                </tr>
                <?php } 
            endif;
            ?>                  

            </tbody>
        </table>
    </div>              
<script src="<?= base_url('assets/js/quill.min.js'); ?>"></script>
<script>
  var editor = new Quill('.editor', { readOnly: true}),
      val = <?= empty($val->konten) ? '""' : $val->konten; ?>;
  editor.setContents(val);
  var text = $(".editor").text().slice(0, 50);

  editor.setText(text+"...");
</script>