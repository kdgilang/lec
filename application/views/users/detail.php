<?php 
$mo = $this->load->model('m_users');
$foto = empty($user['foto']) ? base_url('assets/images/no-profile-image.png') : $user['foto'];
?>
 <div class="box-body">
    <img width="200" src="<?= $foto; ?>" alt="<?= $user['nama'];?> foto" style="margin-bottom: 20px; padding: 15px; border: 1px solid #13344E;"/>
    <table class="table table-striped" width="100%">                      
        <tbody> 
            <tr>
                <td>
                <?php if($slug == 'operator') { $meta = 'nik';?>
                    Nik
                <?php } else if($slug == 'pengajar') { $meta = 'kode_pengajar';?>
                    Kode Pengajar
                <?php } else if($slug == 'siswa') { $meta = 'kode_siswa';?>
                    Kode Siswa
                <?php } 
                    $usermeta = $mo->m_users->get_meta($user['id'], $meta);
                ?>
                </td>
                <td>:</td>
                <td><?= $usermeta['nilai_meta']; ?></td>                    
            </tr>
            <tr>
                <td width="200px"><b>Nama</b></td>
                <td>:</td>
                <td><?= $user['nama'];?></td>                    
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td>:</td>
                <td><?= $user['alamat']; ?></td>                           
            </tr>
            <tr>
                <td><b>Tanggal Lahir</b></td>
                <td>:</td>
                <td><?= $user['tgl_lahir']; ?></td>                        
            </tr>
            <tr>
                <td><b>Telpon</b></td>
                <td width="30px">:</td>
                <td><?= $user['telpon']; ?></td>                           
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>:</td>
                <td><?= $user['status']; ?></td>                           
            </tr> 
            <?php if($slug == 'siswa') {
            $usermeta = $mo->m_users->get_meta($user['id'], 'pembayaran');?>
            <tr>
                <td><b>Status Pembayaran</b></td>
                <td>:</td>
                <td><?= !empty($usermeta) ? $usermeta['nilai_meta'] : 'Belum Bayar'; ?></td>                           
            </tr>
            <?php $kelas = $this->m_kelas->search_kelas('id_siswa', $user['id']);
                $namalevel = '';
                $i = 1;
                foreach($kelas as $key => $k) {
                    if(count($kelas) > 1) {
                        if($i >= count($kelas)) {
                            $namalevel .= $targetlevel[$k->level];
                        } else {
                            $namalevel .= $targetlevel[$k->level].', ';
                        }
                    } else {
                        $namalevel .= $targetlevel[$k->level];
                    }
                    $i ++; 
                } ?>
            <tr>
                <td><b>Target Level</b></td>
                <td>:</td>
                <td><?= $namalevel; ?></td>                           
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php if($slug == 'siswa' || $slug == 'pengajar') {?>
    <br>
    <h4>Jadwal Kursus</h4>
    <table class="table table-bordered" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <?php if($slug != 'pengajar') { ?>
                <th>Nama Pengajar</th>
                <?php }?>
                <th>Hari Kursus</th>
                <th>Jam Kursus</th>
                <th>Tipe Kelas</th>
                <?php if($this->session->level == 1 || $this->session->level == 2) { ?>
                <th>Aksi</th>     
                <?php }?>
            </tr>
        </thead>                      
        <tbody> 
        <?php
        if(!empty($kelas)) :
            $no = 1;
            foreach ($kelas as $val) :
                $pengajar = $this->m_users->detail_users($val->id_pengajar);
            ?>
            <tr>
                <td width="40px"><?= $no++; ?></td>
                <td><?= $val->nama; ?></td>
                <?php if($slug != 'pengajar') { ?>
                <td><?= $pengajar['nama']; ?></td>
                <?php }?>
                <td><?= $val->hari; ?></td>
                <td><?= $val->jam; ?></td>
                <td><?= $val->tipe; ?></td>
                <?php if($this->session->level == 1 || $this->session->level == 2) {?>
                <td width="600px">
                    <a href="<?= base_url('kelas/detail/'.$val->id); ?>" class="btn  btn-sm btn-primary">Detail</a>
                    <a href="<?= base_url('kelas/absensi/'.$val->id); ?>" class="btn btn-sm btn-success">Absensi Kelas</a>
                    <a href="<?= base_url('kelas/form/'.$val->id); ?>" class="btn  btn-sm btn-warning">Ubah</a>
                </td>
                <?php } ?>                   
            </tr>
        <?php
            endforeach;
        endif;?> 
        </tbody>
    </table>
    <?php } ?>
    <?php if($this->session->level != 4) {?>
    <div>
        <a href="<?= base_url($slug); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
    </div>
    <?php }?>
</div> 
