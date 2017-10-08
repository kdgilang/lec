            
        <?php $this->load->view('layout/header');?>
        <?php $this->load->view('layout/side'); ?>
        <?php 
          if(!empty($id)) {
            $action = base_url().'operator/edit';
            $title = 'Ubah Kelas';
          } else {
            $action = base_url().'operator/add';
            $title = 'Tambah Kelas';
          }
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <small><?= $title;?></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-fw fa-table"></i> <?= $title;?>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- isi content -->
                <!-- table -->   
                <!-- form pendaftaran -->
                <form action="<?= $action;?>" enctype="multipart/form-data" method="post">
                  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
                    <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
                      <?php 
                          $id = empty($id) ? "" : $id;
                          $tipe = empty($user['username']) ? "" : $user['username'];
                          $nama = empty($user['nama']) ? "" : $user['nama'];
                          $status = empty($user['email']) ? "" : $user['email'];
                          $jam = empty($user['alamat']) ? "" : $user['alamat'];
                          $hari = empty($user['tgl_lahir']) ? "" : $user['tgl_lahir'];
                          $level = empty($user['tgl_lahir']) ? "" : $user['tgl_lahir'];
                          $vs = empty($user['id_siswa']) ? "" : $user['id_siswa'];
                          $ps = empty($user['id_pengajar']) ? "" : $user['id_pengajar']; 
                      ?> 
                      <div class="panel-body daftar">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <div class="form-group margin">        
                          <input class="form-control input" placeholder="Nama" name="nama" value="<?= $nama; ?>">          
                        </div>
                        <div class="form-group margin">        
                          <select name="status" id="status" class="form-control input">
                            <option value="0" default>Status</option>
                            <option value="aktif">Aktif</option>
                            <option value="tidak aktif">Tidak Aktif</option>
                            <option value="koreksi">Koreksi</option>
                          </select>       
                        </div>
                        <div class="form-group margin">        
                          <select name="tipe" id="tipe" class="form-control input">
                            <option value="0" default>Tipe Kursus</option>
                            <option value="private">Private</option>
                            <option value="biasa">Biasa</option>
                          </select>       
                        </div>
                        <div class="row">
                          <div class="col-xs-12"><strong>Hari Kursus</strong></div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Senin">Senin
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Selasa">Selasa
                                  </label>
                              </div>  
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Rabu">Rabu
                                  </label>
                              </div>                      
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Kamis">Kamis
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Jumat">Jumat
                                  </label>
                              </div>                                               
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Sabtu">Sabtu
                                  </label>
                              </div>
                              <div class="checkbox">
                                  <label>
                                      <input name="hari[]" type="checkbox" value="Minggu">Minggu
                                  </label>
                              </div>                                             
                            </div>
                          </div>
                        </div>
                        <div class="row" style="margin-bottom: 15px;">
                          <div class="col-md-12" style="margin-bottom: 5px;"> <strong>Jam Kursus</strong> </div>                        
                          <div class="col-md-5">
                            <div class="input-group input-jam">
                                <input name="jam[]" type="text" class="timepicker form-control input-small">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div>
                          </div>
                          <div class="col-md-2" style="text-align: center;">-</div>
                          <div class="col-md-5">
                            <div class="input-group input-jam">
                                <input name="jam[]" type="text" class="timepicker form-control input-small">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                            </div> 
                          </div>
                        </div>
                        <div class="form-group margin">        
                          <select name="tipe" id="tipe" class="form-control input">
                            <option>Tipe Kursus</option>
                            <option value="1">General English</option>
                            <option value="2">Conversation Class</option>
                            <option value="3">English for Tourism</option>
                            <option value="4">English for Law professional</option>
                            <option value="5">TOEFL / IELTS Preparation</option>
                            <option value="6">Company Traning</option>
                          </select>       
                        </div>
                        <?php if(!empty($siswa)): ?>
                        <div class="form-group margin selectboxes">
                          <div id="c-siswa" class="c-tag bye">
                            <div class="clearfix"></div>
                          </div>        
                          <a href="javscript:;" class="select form-control">Pilih Siswa <span class="fa fa-angle-down"></span></a>
                          <div class="c-lists">
                            <input id="searchsiswa" type="text" autocomplete="off" class="form-control" placeholder="Cari Siswa"> 
                            <ul class="lists">
                              <?php foreach($siswa as $val) { ?>
                                <li data-value="<?=$val->id;?>" data-target="c-siswa" class="addlist"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
                              <?php } ?>
                            </ul>
                         </div>
                        </div>
                      <?php endif; ?>
                      <?php if(!empty($pengajar)): ?>
                        <div class="form-group margin selectboxes">
                          <div id="c-siswa" class="c-tag bye">
                            <div class="clearfix"></div>
                          </div>        
                          <a href="javscript:;" class="select form-control">Pilih Pengajar<span class="fa fa-angle-down"></span></a>
                          <div class="c-lists">
                            <input id="searchsiswa" type="text" autocomplete="off" class="form-control" placeholder="Cari Pengajar"> 
                            <ul class="lists">
                              <?php foreach($pengajar as $val) { ?>
                                <li data-value="<?=$val->id;?>" data-target="c-siswa" class="addlist"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
                              <?php } ?>
                            </ul>
                         </div>
                        </div> 
                      <?php endif;?>                                          
                        <div class="col-md-12 btn-daftar">
                          <a href="<?php echo base_url(). 'operator'; ?>" class="btn btn-default">Kembali</a>&nbsp&nbsp
                          <button type="submit" class="btn btn-success">Simpan</button>       
                        </div>      
                      </div>
                    </div>
                  </div>
                </form>

            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script>
      var siswa = <?=json_encode($siswa);?>,
          bsiswa = <?=json_encode($siswa);?>;
      $(".timepicker").timepicker({dropdown: true});

      (function (js){
        'use strict';
        // OPEN DROPDOWN TAG
        js(document).on('click', '.select', function() {
          var dd = js(this).next(".c-lists");
          dd.slideToggle(400);
          js(this).toggleClass('active');
        });

        // add lists
        js(document).on('click', '.addlist', function () {
          var that = js(this),
              val = that.data("value"),
              text = that.text(),
              target = that.data("target"),
              html = `<div class="item-tag">
                        `+text+`
                        <input type="hidden" name="siswa[]" value="`+val+`"/>
                        <span data-value="`+val+`" class="delete-tag fa fa-times"></span>
                    </div>`;
          if(js("#"+target).children('.item-tag').length <= 0) {
            js("#"+target).fadeIn(200);
          }
          that.remove();
          siswa.forEach( function(v, index) {
            if(v.id == val) {
              siswa.splice(index);
            }
          });
          js("#"+target).prepend(html);
        });

        // DELETE TAG
        js(document).on('click', '.delete-tag', function() {
          var that = js(this),
              val = that.data("value"),
              html = '';
          bsiswa.forEach( function(v, index) {
            if(v.id == val) {
              siswa.push(bsiswa[index]);
              html+='<li data-value="'+v.id+'" data-target="c-siswa" class="addlist"><span> '+v.nama+' ('+v.username+')</span></li>';
            }
          });
          that.parents('.selectboxes').find('.lists').append(html);
          that.parent().remove();
        });

        // SEARCH NAME TAG
        js(document).on('keyup', '#searchsiswa', function () {
          var that = js(this),
              val = that.val(),
              html = "";
            if(siswa.length > 0) {
              siswa.forEach( function(v, index) {
                if(v.username.search(val) > -1) {
                  html+='<li data-value="'+v.id+'" data-target="c-siswa" class="addlist"><span> '+v.nama+' ('+v.username+')</span></li>';
                } else {
                  html += '<li><span>Tidak Ditemukan</span></li>';
                }
              });
            } else {
              html += '<li><span>Tidak Ditemukan</span></li>';
            }
          that.next().html(html);
        });
      })(jQuery)
    </script>
    <?php $this->load->view('layout/footer'); ?>
