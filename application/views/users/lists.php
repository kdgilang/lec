    <!-- table -->   
    <a href="<?= base_url().$slug; ?>/form" class="btn btn-success"><i class="fa fa-plus"></i> Tambah <?= $title;?></a>                
    <br><br>     
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
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
                    <th>Aksi</th>                                
                </tr>
            </thead>
            <tbody>  

            <?php 
            $no = 1;
            if(!empty($users)) :
                $mo = $this->load->model('m_users');
                foreach($users as $val) { 
                    $usermeta = $mo->m_users->get_meta($val->id, $meta);
                ?>                        
                <tr>
                    <td width="40px"><?= $no++?></td>
                    <td><?= $usermeta['nilai_meta']; ?></td>
                    <td><?= $val->nama; ?></td>
                    <td><?= $val->status; ?></td>  
                    <td>
                        <a href="<?= base_url(). $slug;?>/detail/<?= $val->id; ?>" class="btn btn-sm btn-primary">Detail</a>
                        &nbsp
                        <a href="<?= base_url(). $slug;?>/form/<?= $val->id; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                    </td>                                                    
                </tr>
                <?php } 
            endif;
            ?>                  

            </tbody>
        </table>
    </div>              