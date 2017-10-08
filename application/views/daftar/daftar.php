  <?php $this->load->view('daftar/layout/header');?>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 panel form-daftar-offline">    
        <div class="panel-body">
          <ul class="nav nav-tabs">
            <li class="active"><a href="<?php echo base_url() ?>daftar">Daftar</a></li>
            <li><a href="<?php echo base_url() ?>daftar/informasi">Informasi</a></li>
            <li><a href="<?php echo base_url() ?>daftar/target_level">Target Level</a></li>
          </ul> 
          <div class="content_input">
            <div class="panel-body">
              <form action="<?= base_url();?>/daftar/add" enctype="multipart/form-data" method="post">
                <input type="hidden" name="status" value="tidak aktif">
                <div class="form-group margin">        
                  <input class="form-control input" placeholder="User Name" name="username">          
                </div>
                <div class="form-group margin">        
                  <input class="form-control input" placeholder="Nama" name="nama">          
                </div>
                <div class="form-group margin">
                  <input class="form-control input" placeholder="Email" name="email">
                </div>
                <div class="form-group margin">        
                  <input class="form-control input" placeholder="Alamat" name="alamat">          
                </div>
                <div class="form-group">                               
                  <div id="c-date" class="input-group date" data-provide="datepicker" style="width: 100% !important;">
                      <input class="form-control date" name="tgl_lahir" type="text" placeholder="Tanggal Lahir">
                  </div>                  
                </div>
                <div class="form-group margin">        
                  <input class="form-control input" type="text" placeholder="No Telpon" name="telpon" autocomplete="off">          
                </div>   
                <div class="form-group margin">        
                  <input class="form-control input" accept="image/*" placeholder="Foto" name="foto" type="file">          
                </div>              
                <div class="form-group margin">        
                  <input class="form-control input" placeholder="Password Baru" name="password" type="password" autocomplete="off">          
                </div>                                              
                <div class="col-xs-12 btn-daftar">
                  <a href="<?php echo base_url(). 'operator'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                  <input type="submit" class="btn btn-success" value="Simpan"></button>       
                </div>      
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $this->load->view('daftar/layout/footer'); ?>




    