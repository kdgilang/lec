<?php 
    $pengajar = $this->m_users->detail_users($kelas->id_pengajar);
    $siswa = !empty($kelas->id_siswa) ? explode(',', $kelas->id_siswa) : array();
    $siswa = $this->m_users->in_users($siswa);
?>
<h4>Nama Kelas: <?= $kelas->nama;?></h4>
<h4>Nama Pengajar: <a href="<?=base_url('pengajar/detail/'.$pengajar['id']);?>" class="link"><?= $pengajar['nama'];?></a></h4>
<h4>Hari: <?= $kelas->hari;?></h4>
<h4>Jam: <?= $kelas->jam;?></h4>
<br>
<div class="box-body">
    <table class="table table-striped table-bordered table-hover" width="100%">
        <thead>
            <tr>
                <th align="center" width="100px;" style="text-align: center;">No</th>
                <th>Kode Siswa</th>
                <th>Nama Siswa</th>
                <th style="text-align: center;">Aksi</th>
            </tr>
        </thead>                      
        <tbody>
            <?php if(!empty($siswa))  { $i=1;?>
                <?php foreach($siswa as $val) {
                    $meta = $this->m_users->get_meta($val['id'], 'kode_siswa'); ?>
                <tr>
                    <td align="center" width="100px;"><?= $i; ?></td>
                    <td><?= $meta['nilai_meta']; ?></td> 
                    <td><?= $val['nama']; ?></td>  
                    <td style="text-align: center;"><a class="btn btn-sm btn-primary" href="<?= base_url('siswa/detail/'.$val['id']); ?>">Detail</a></td>                   
                </tr>
                <?php $i++; }?>
            <?php }?>
        </tbody>
    </table>
    <div>
        <a href="<?= base_url('kelas'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
    </div>
</div>              
