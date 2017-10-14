<?php 
  $action = base_url($slug);
  $id = empty($kelas->id) ? "" : $kelas->id;
  if(!empty($id)) {
    $action .= '/edit';
    $title = 'Ubah Kelas';
  } else {
    $action .= '/add';
    $title = 'Tambah Kelas';
  }
  $nama = empty($kelas->nama) ? "" : $kelas->nama;
  $tipe = empty($kelas->tipe) ? "" : $kelas->tipe;
  $status = empty($kelas->status) ? "" : $kelas->status;
  $jam = empty($kelas->jam) ? array("","") : explode(" - ", $kelas->jam);
  $pertemuan= empty($kelas->pertemuan) ? "" : $kelas->pertemuan;
  $hari = empty($kelas->hari) ? array() : explode(",", $kelas->hari);
  $level = empty($kelas->level) ? "" : $kelas->level;
  $ids = empty($kelas->id_siswa) ? array() : explode(",", $kelas->id_siswa);
  $idp = empty($kelas->id_pengajar) ? "" : $kelas->id_pengajar;
  $np = empty($idp) ? "" : $this->m_users->detail_users($idp);
  $np = empty($np) ? "Pilih Pengajar" : $np['nama'].' ('.$np['username'].')';
  $uniqsiswa = $siswa;
  if(!empty($ids)) {
    $uniqsiswa = [];
    $csiswa = [];
    $i = $j = $g = 0;
    foreach ($siswa as $key => $val) {
      if(!in_array($val->id, $ids)) {
        $uniqsiswa[$j] = $siswa[$i];
        $j++;
      } else {
        $csiswa[$g] = $siswa[$i];
        $g++;
      } 
      $i++;
    } 
  }
?> 
<form action="<?= $action;?>" enctype="multipart/form-data" method="post">
  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
    <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
      <div class="panel-body daftar">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <div class="form-group margin">        
          <input type="text" class="form-control input" placeholder="Nama Kelas" name="nama" value="<?= $nama; ?>" required>          
        </div>
        <div class="form-group margin">        
          <select name="status" id="status" class="form-control input" required>
            <option>Status Kelas</option>
            <option <?= ($status=="aktif") ? "selected" : ""; ?> value="aktif">Aktif</option>
            <option <?= ($status=="tidak aktif") ? "selected" : ""; ?> value="tidak aktif">Tidak Aktif</option>
            <option <?= ($status=="koreksi") ? "selected" : ""; ?> value="koreksi">Koreksi</option>
          </select>       
        </div>
        <div class="form-group margin">        
          <select name="tipe" id="tipe" class="form-control input" required>
            <option>Tipe Kursus</option>
            <option <?= ($tipe=="private") ? "selected" : ""; ?> value="private">Private</option>
            <option <?= ($tipe=="biasa") ? "selected" : ""; ?> value="biasa">Biasa</option>
          </select>       
        </div>
        <div class="row">
          <div class="col-xs-12"><strong>Hari Kursus</strong></div>
          <div class="col-md-4">
            <div class="form-group">
              <div class="checkbox">
                  <label>
                      <input <?= in_array('senin', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Senin">Senin
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input <?= in_array('selasa', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Selasa">Selasa
                  </label>
              </div>  
              <div class="checkbox">
                  <label>
                      <input <?= in_array('rabu', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Rabu">Rabu
                  </label>
              </div>                      
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <div class="checkbox">
                  <label>
                      <input <?= in_array('kamis', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Kamis">Kamis
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input <?= in_array('jumat', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Jumat">Jumat
                  </label>
              </div>                                               
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <div class="checkbox">
                  <label>
                      <input <?= in_array('sabtu', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Sabtu">Sabtu
                  </label>
              </div>
              <div class="checkbox">
                  <label>
                      <input <?= in_array('minggu', $hari) ? "checked" : ""; ?> name="hari[]" type="checkbox" value="Minggu">Minggu
                  </label>
              </div>                                             
            </div>
          </div>
        </div>
        <div class="row" style="margin-bottom: 15px;">
          <div class="col-md-12" style="margin-bottom: 5px;"> <strong>Jam Kursus</strong> </div>                        
          <div class="col-md-6">
            <div class="input-group input-jam">
                <input name="jam[]" type="text" class="timepicker form-control input-small" value="<?= $jam[0];?>" required>
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group input-jam">
                <input name="jam[]" type="text" class="timepicker form-control input-small" value="<?= $jam[1];?>" required>
                <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
            </div> 
          </div>
        </div>
        <div class="form-group margin">        
          <input type="number" class="form-control input" placeholder="Jumlah Pertemuan" name="pertemuan" value="<?= $pertemuan; ?>" required>          
        </div>
        <div class="form-group margin">        
          <select name="level" id="level" class="form-control input" required>
            <option>Target Level</option>
            <option <?= ($level==1) ? "selected" : ""; ?> value="1">General English</option>
            <option <?= ($level==2) ? "selected" : ""; ?> value="2">Conversation Class</option>
            <option <?= ($level==3) ? "selected" : ""; ?> value="3">English for Tourism</option>
            <option <?= ($level==4) ? "selected" : ""; ?> value="4">English for Law professional</option>
            <option <?= ($level==5) ? "selected" : ""; ?> value="5">TOEFL / IELTS Preparation</option>
            <option <?= ($level==6) ? "selected" : ""; ?> value="6">Company Traning</option>
          </select>       
        </div>
        <?php if(!empty($uniqsiswa)): ?>
        <div class="form-group margin">
          <div id="c-siswa" class="c-tag <?= !empty($csiswa) ? '' : 'bye'; ?>">
            <?php if(!empty($csiswa)) {foreach($csiswa as $val) { ?>
            <div class="item-tag">
                <input type="hidden" name="id_siswa[]" value="<?= $val->id;?>" required />
                <span data-value="<?= $val->id;?>" class="delete-tag fa fa-times"></span>
            </div>
            <?php } }?>
            <div class="clearfix"></div>
          </div>     
          <a href="javscript:;" class="selectbox form-control">Pilih Siswa <span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchsiswa" type="text" autocomplete="off" class="form-control" placeholder="Cari Siswa"> 
            <ul class="lists">
              <?php foreach($uniqsiswa as $val) { ?>
                <li data-value="<?=$val->id;?>" data-target="c-siswa" class="addlist"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
              <?php } ?>
            </ul>
         </div>
        </div>
      <?php endif; ?>
      <?php if(!empty($pengajar)): ?>
        <div class="form-group margin c-selectbox">
          <a href="javascript:;" class="selectbox"><span class="text"><?= $np;?></span><span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchpengajar" class="form-control" type="text" placeholder="Cari Pengajar">
            <input type="hidden" name="id_pengajar" value="<?=$idp;?>">
            <ul class="lists data-selectbox">
                <?php foreach($pengajar as $val) { ?>
                <li data-value="<?=$val->id;?>"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
                <?php } ?>
            </ul>
          </div>
        </div> 
      <?php endif;?>                                          
        <div class="col-md-12 text-center">
          <a href="<?= base_url('kelas'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>       
        </div>      
      </div>
    </div>
  </div>
</form>
<script>
  var siswa = <?=json_encode($uniqsiswa);?>,
      bsiswa = <?=json_encode($siswa);?>;
  $(".timepicker").timepicker({
    dropdown: true,    
    minTime: '10:00AM',
    maxTime: '06:00PM'
  });

  (function (js){
    'use strict';
    // OPEN DROPDOWN TAG
    js(document).on('click', '.selectbox', function() {
      var dd = js(this).next(".c-lists");
      $(".c-lists").fadeOut(200);
      $(".selectbox").removeClass('active');
      dd.fadeToggle(400);
      $(this).toggleClass('active');
    });

    // add lists
    js(document).on('click', '.addlist', function () {
      var that = js(this),
          val = that.data("value"),
          text = that.text(),
          target = that.data("target"),
          html = `<div class="item-tag">
                    `+text+`
                    <input type="hidden" name="id_siswa[]" value="`+val+`" required />
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


    /* SELECTBOX */
    $(document).on('click', '.selectbox', function (e) {
      var that = $(this),
          dd = that.siblings(".data-selectbox");
      dd.fadeToggle(300);
      e.preventDefault();
    });
    $(document).on('click', '.data-selectbox li', function () {
      var that = $(this),
          val = that.data("value"),
          text = that.text(),
          parent = that.parent(),
          parents = that.parents(".c-selectbox");
      parent.prev('input').val(val);
      parents.children('.selectbox').children('.text').text(text);
      parents.children('.c-lists').fadeOut(100);
    });
  })(jQuery)
</script>
