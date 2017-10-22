<br> <br>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-striped table-dynamic">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kelas</th> 
                <th>Status Kelas</th>
                <th>Target Level</th>
                <th>Tipe Kelas</th>  
                <th>Aksi</th>     
            </tr>
        </thead>
        <tbody>  

        <?php
        if(!empty($data)) :
            $no = 1;
            foreach ($data as $val) : //ngabsen data
            ?>
            <tr>
                <td width="40px"><?= $no++; ?></td>
                <td><?= $val->nama; ?></td>
                <td><?= $val->status; ?></td>
                <td><?= $targetlevel[$val->level]; ?></td>
                <td><?= $val->tipe; ?></td> 
                <td width="600px">
                    <a href="<?= base_url('kelas/absensi/'.$val->id); ?>" class="btn btn-sm btn-success">Absensi Kelas</a>
                    <a href="<?= base_url('kelas/detail/'.$val->id); ?>" class="btn  btn-sm btn-primary">Detail</a>
                </td>                                            
            </tr>
        
        <?php
            endforeach;
        endif;
        ?>                        

        </tbody>
    </table>
</div>  