            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Data <?= $title;?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-user" aria-hidden="true"></i> Data <?= $title;?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <a href="<?= base_url().$slug; ?>/form" class="btn btn-success"><i class="fa fa-plus"></i> Tambah <?= $title;?></a>                
                <div><br></div>             
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
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
                                $usermeta = $mo->m_users->get_meta($val['id'], 'nik');
                            ?>                        
                            <tr>
                                <td width="40px"><?= $no++?></td>
                                <td><?= $usermeta['nilai_meta']; ?></td>
                                <td><?= $val['nama']; ?></td>
                                <td><?= $val['status']; ?></td>  
                                <td>
                                    <a href="<?= base_url(). $slug;?>/detail/<?= $val['id']; ?>" class="btn btn-sm btn-primary">Detail</a>
                                    &nbsp
                                    <a href="<?= base_url(). $slug;?>/form/<?= $val['id']; ?>" class="btn  btn-sm btn-warning">Ubah</a>
                                </td>                                                    
                            </tr>
                            <?php } 
                        endif;
                        ?>                  

                        </tbody>
                    </table>
                </div>              

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
