    <!-- table -->   
    <a href="<?= base_url($slug); ?>/form" class="btn btn-success"><i class="fa fa-plus"></i> Tambah <?= $title;?></a>                
    <br><br>     
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keterangan</th>
                    <th>Tanggal Cetak</th>
                    <th>Tanggal Terbit</th> 
                    <th>Tanggal Mengambil</th> 
                    <th>Nama Operator</th>
                    <th>Aksi</th>                               
                </tr>
            </thead>
            <tbody>  
            <?php 
            $no = 1;
            if(!empty($pengumuman)) :
                foreach($pengumuman as $val) { 
                    $operator = $this->m_users->detail_users($val->id_operator);
                ?>                        
                <tr>
                    <td width="40px"><?= $no++?></td> 
                    <td><?= $val->keterangan; ?></td>
                    <td><?= $val->tgl_cetak; ?></td>
                    <td><?= $val->tgl_terbit; ?></td>
                    <td><?= $val->tgl_mengambil; ?></td> 
                    <td><?= $operator['nama']. '('. $operator['username']; ?>)</td>  
                    <td>
                        <a href="<?= base_url($slug);?>/detail/<?= $val->id; ?>" class="btn btn-sm btn-primary">Detail</a>
                        &nbsp
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
      val = <?= $val->konten; ?>;
  editor.setContents(val);
  var text = $(".editor").text().slice(0, 50);

  editor.setText(text);
</script>