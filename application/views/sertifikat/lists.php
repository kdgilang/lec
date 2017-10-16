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
                <td><?= $val->tgl_cetak; ?></td>
                <td><?= $val->tgl_terbit; ?></td>
                <td><?= $val->tgl_ambil; ?></td>
                <td><?= $siswa['nama']. '('. $siswa['username']; ?>)</td>  
                <td><?= $operator['nama']. '('. $operator['username']; ?>)</td>  
                <td>
                    <a href="<?= base_url($slug);?>/detail/<?= $val->id; ?>" class="btn btn-sm btn-primary">Detail</a>
                    <a href="<?= base_url($slug);?>/form/<?= $val->id; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                    <a target="_blank" href="<?= base_url($slug);?>/download/<?= $val->id; ?>" class="btn  btn-sm btn-success">Download</a>
                </td>                                                    
            </tr>
            <?php } 
        endif;
        ?>                  
        </tbody>
    </table>
</div>