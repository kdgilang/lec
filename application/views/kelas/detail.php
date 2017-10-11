<div class="box-body">
    <table class="table table-striped" width="100%">                      
        <tbody> 
            <?php 
            $mo = $this->load->model('m_operator');
            $usermeta = $mo->m_operator->get_meta($user['id'], 'nik');?>
            <tr>
                <td width="400px"><b>NIK</b></td>
                <td>:</td>
                <td><?php echo $usermeta['nilai_meta']; ?></td>                    
            </tr>
            <tr>
                <td width="400px"><b>Nama</b></td>
                <td>:</td>
                <td><?php echo $user['nama'];?></td>                    
            </tr>
            <tr>
                <td><b>Alamat</b></td>
                <td>:</td>
                <td><?php echo $user['alamat']; ?></td>                           
            </tr>
            <tr>
                <td><b>Tanggal Lahir</b></td>
                <td>:</td>
                <td><?php echo $user['tgl_lahir']; ?></td>                        
            </tr>
            <tr>
                <td><b>Telpon</b></td>
                <td width="30px">:</td>
                <td><?php echo $user['telpon']; ?></td>                           
            </tr>
            <tr>
                <td><b>Status</b></td>
                <td>:</td>
                <td><?php echo $user['status']; ?></td>                           
            </tr>   
        </tbody>
    </table>
    <div>
        <a href="<?php echo base_url() ?>operator" class="btn btn-default">Kembali</a>
    </div>
</div>              
