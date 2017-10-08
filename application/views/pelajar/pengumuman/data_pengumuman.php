            
        <?php $this->load->view('pelajar/layout/header');?>
        <?php $this->load->view('pelajar/layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Home</small>
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
                        <div class="panel panel-primary">
                            <div class="panel-heading style="text-align: center;">
                                <h3 class="panel-title" style="text-align: center;">Informasi & Pengumuman</h3>
                            </div>
                            <div class="panel-body">

                        <?php 
                        $no = 1;
                        foreach($pengumuman as $list){ 
                        ?> 
                            <div class="isi_pengumuman">
                               <h5><b><?php echo $list['judul'] ?></b></h5>
                                <h6><i class="fa fa-calendar-o" aria-hidden="true"></i>
 &nbsp&nbsp<?php echo $list['tanggal'] ?></h6>
                                <h5><?php echo $list['isi'] ?></h5>  
                            </div>

                                
                         <?php } ?> 
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
