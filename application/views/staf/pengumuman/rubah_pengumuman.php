            
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
                <form action="<?php echo base_url(). 'staf/pengumuman/update_pengumuman'; ?>" method="post">
                    <div class="col-md-12 pengumuman">   

                    <input type="hidden" class="form-control" name="id_pengumuman" value="<?php echo $pengumuman['id_pengumuman'] ?>">
                        
                        <div class="form-group">
                            <div>                               
                                <label form="" class="">Tanggal</label>
                            </div>                              
                            <div class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                                <input class="form-control date" name="tanggal" type="text" value="<?php echo $pengumuman['tanggal'] ?>">
                            </div>                  
                        </div>

                        <div class="form-group">
                            <label for="">Judul</label>
                            <input class="form-control" name="judul" type="text" value="<?php echo $pengumuman['judul'] ?>">
                        </div>
                            <label for="" class="tentang">Isi Pengumuman</label>
                            <textarea name="isi"><?php echo $pengumuman['isi'] ?></textarea><br>

                        <?php 
                        function select($var1,$var2){
                          if($var1 == $var2){
                            return 'selected="selected"';
                          }
                        }
                        ?>   
                        <div class="form-group">  
                            <div>                               
                                <label form="" class="">Status</label>
                            </div>      
                            <select class="form-control" name="status_pengumuman" value="<?php echo $operator['status_pengumuman'] ?>">
                                <option value="Aktif" <?php echo select("Aktif",$pengumuman['status_pengumuman']) ?>>Aktif</option>
                                <option value="Tidak Aktif" <?php echo select("Tidak Aktif",$pengumuman['status_pengumuman']) ?>>Tidak Aktif</option>
                            </select>
                        </div><br>

                        <div class="col-md-12 btn-daftar">
                            <a href="<?php echo base_url(). 'staf/pengumuman/data_pengumuman'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                            <input type="submit" class="btn btn-success" value="Simpan"></button>
                        </div>
                        </div>   
                    </div>
                </form>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <?php $this->load->view('staf/layout/footer'); ?>
