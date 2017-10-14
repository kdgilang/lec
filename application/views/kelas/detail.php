<?php 
    $pengajar = $this->m_users->detail_users($kelas->id_pengajar);
    $siswa = !empty($kelas->id_siswa) ? explode(',', $kelas->id_siswa) : array();
    $siswa = $this->m_users->in_users($siswa);
?>
<h4>Nama Kelas: <?= $kelas->nama;?></h4>
<h4>Nama Pengajar: <a href="<?=base_url('pengajar/detail/'.$pengajar['id']);?>" class="link"><?= $pengajar['nama'];?></a></h4>
<div class="box-body">
    <table class="table table-striped" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Siswa</th>
                <th>Nama Siswa</th>
                <th>Aksi</th>
            </tr>
        </thead>                      
        <tbody>
            <?php if(!empty($siswa))  { $i=1;?>
                <?php foreach($siswa as $val) {
                    $meta = $this->m_users->get_meta($val['id'], 'kode_siswa'); ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $meta['nilai_meta']; ?></td> 
                    <td><?= $val['nama']; ?></td> 
                    <td><a class="btn btn-primary" href="<?= base_url('siswa/detail/'.$val['id']); ?>">Detail</a></td>                   
                </tr>
                <?php $i++; }?>
            <?php }?>
        </tbody>
    </table>
    <div>
        <a href="<?= base_url('kelas'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
    </div>
</div>              
