<a href="<?php echo base_url() ?>kelas/form" type="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Kelas</a>
<br> <br>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th> 
                <th>Status Kelas</th>
                <th>Tipe Kelas</th>     
                <th>Aksi</th>         
            </tr>
        </thead>
        <tbody>  

        <?php
        $no = 1;
        if(!empty($data)) :
            foreach ($data as $val) : //ngabsen data
            ?>
            <tr>
                <td width="40px"><?= $no++; ?></td>
                <td><?= $val->nama; ?></td>
                <td><?= $val->status; ?></td>
                <td><?= $val->tipe; ?></td>
                <td width="600px">
                    <a href="<?= base_url();?>kelas/absensi/<?php echo $val->id; ?>" class="btn btn-sm btn-success">Kelola Kelas</a>
                    &nbsp
                    <a href="<?= base_url();?>kelas/form/<?php echo $val->id; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                </td>                                                    
            </tr>
        
        <?php
            endforeach;
        endif;
        ?>                        

        </tbody>
    </table>
</div>              
