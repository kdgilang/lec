<!-- table -->   
<a href="<?= base_url($slug); ?>/form" class="btn btn-success"><i class="fa fa-plus"></i> Tambah <?= $title;?></a>                
<br><br>     
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped table-dynamic">
        <thead>
            <tr>
                <th>No</th>
                <th>Status</th>
                <th>Tanggal Terbit</th>
                <th>Target Level</th>
                <th>Nama Siswa</th>
                <th>Nama Operator</th>
                <th>Aksi</th>                               
            </tr>
        </thead>
        <tbody>  
        <?php 
        if(!empty($sertifikat)) :
            $no = 1;
            foreach($sertifikat as $val) { 
                $operator = $this->m_users->detail_users($val->id_operator);
                $siswa = $this->m_users->detail_users($val->id_siswa);
            ?>                        
            <tr>
                <td width="40px"><?= $no++?></td> 
                <td><?= $val->status; ?></td>
                <td><?= $val->tgl_terbit; ?></td>
                <td><?= $targetlevel[$val->level]; ?></td>
                <td><?= $siswa['nama']. '('. $siswa['username']; ?>)</td>  
                <td><?= $operator['nama']. '('. $operator['username']; ?>)</td>  
                <td align="center">
                    <a href="<?= base_url($slug);?>/detail/<?= $val->id; ?>" class="btn btn-sm btn-primary btn-action">Detail</a>
                    <a href="<?= base_url($slug);?>/form/<?= $val->id; ?>" class="btn btn-sm btn-warning btn-action">Ubah</a>
                    <a target="_blank" href="<?= base_url($slug);?>/download/<?= $val->id; ?>" class="btn btn-sm btn-success btn-action">Download</a>
                </td>                                                    
            </tr>
            <?php } 
        endif;
        ?>                  
        </tbody>
    </table>
</div>