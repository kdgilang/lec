            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small>Input Sertifikat</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-certificate icon-menu" aria-hidden="true"></i></i> Input Sertifikat
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form kelas -->
                <form action="<?php echo base_url(). 'sertifikat/tambah_sertifikat'; ?>" method="post">
                <div class="clearfix"></div> 
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                  <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">                    
                    <div class="panel-body daftar">
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="NIM" name="nim">          
                      </div>
                      <div class="form-group margin">        
                        <input class="form-control input" placeholder="Nama" name="nama">          
                      </div>                     
                      <div class="form-group">       
                        <select class="form-control" name="status">
                          <option value="Lulus">Lulus</option>
                          <option value="Tidak Lulus">Tidak Lulus</option>                           
                        </select>
                      </div>
                      <div class="col-md-12 btn-daftar">
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
