    <!-- table -->   
    <a href="<?= base_url($slug); ?>/form" class="btn btn-success"><i class="fa fa-plus"></i> Tambah <?= $title;?></a>                
    <br><br>     
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped table-dynamic">
            <thead>
                <tr>
                    <th>No</th>
                    <th>
                    <?php if($slug == 'operator') { $meta = 'nik';?>
                        Nik
                    <?php } else if($slug == 'pengajar') { $meta = 'kode_pengajar';?>
                        Kode Pengajar
                    <?php } else if($slug == 'siswa') { $meta = 'kode_siswa';?>
                        Kode Siswa
                    <?php } ?>
                    </th>
                    <th>Nama</th>
                    <th>Status</th>
                    <?php if($slug == 'siswa') {?>
                    <th>Target Level</th>
                    <th>Status Pembayaran</th>
                    <?php } ?>
                    <th>Aksi</th>                                
                </tr>
            </thead>
            <tbody>  

            <?php 
            if(!empty($users)) :
                $no = 1;
                $mo = $this->load->model('m_users');
                foreach($users as $val) {
                    $usermeta = $mo->m_users->get_meta($val->id, $meta);
                    $pmeta = $mo->m_users->get_meta($val->id, 'pembayaran');
                    if($slug == 'siswa') {
                        $kelas = $this->m_kelas->search_kelas('id_siswa', $val->id);
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
                        }
                    }
                ?>                        
                <tr>
                    <td width="40px"><?= $no++?></td>
                    <td><?= $usermeta['nilai_meta']; ?></td>
                    <td><?= $val->nama; ?></td>
                    <td><?= $val->status; ?></td>
                    <?php if($slug == 'siswa') {?>
                    <td><?= $namalevel; ?></td>
                    <td><?= !empty($pmeta['nilai_meta']) ? $pmeta['nilai_meta'] : 'Belum Bayar'; ?></td>  
                    <?php }?>
                    <td align="center">
                        <a href="<?= base_url($slug);?>/detail/<?= $val->id; ?>" class="btn btn-sm btn-primary btn-action">Detail</a>
                        <a href="<?= base_url($slug);?>/form/<?= $val->id; ?>" class="btn  btn-sm btn-warning btn-action">Ubah</a>
                    </td>                                                    
                </tr>
                <?php } 
            endif;
            ?>                  

            </tbody>
        </table>
    </div>              