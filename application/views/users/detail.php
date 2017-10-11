<?php 
$mo = $this->load->model('m_users');
$usermeta = $mo->m_users->get_meta($user['id'], 'nik');
$foto = empty($user['foto']) ? base_url().'assets/images/no-profile-image.png' : $user['foto'];
?>
 <div class="box-body">
    <img src="<?= $foto; ?>" alt="<?= $user['nama'];?> foto" style="margin-bottom: 20px; padding: 15px; border: 1px solid #13344E;"/>
    <table class="table table-striped" width="100%">                      
        <tbody> 
            <tr>
                <td width="200px"><b>NIK</b></td>
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
        </tbody>
    </table>
    <div>
        <a href="<?= base_url() ?>operator" class="btn btn-default">Kembali</a>
    </div>
</div> 
