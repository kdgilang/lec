            
        <?php $this->load->view('staf/layout/header');?>
        <?php $this->load->view('staf/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Pengumuman</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i></i> Pengumuman
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->  
                <form action="<?php echo base_url(). 'pengumuman/tambah_pengumuman'; ?>" method="post">
                    <div class="col-md-12 pengumuman">                    
                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" name="judul" type="text">
                        </div>
                            <label for="" class="tentang">Isi Pengumuman</label>
                            <textarea name="isi"></textarea><br><br>   
                        <div class="simpan">
                            <input type="submit" class="btn btn-success" value="SIMPAN"></button>
                        </div>
                        </div>                
                    </div>
                </form>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('layout/footer'); ?>
