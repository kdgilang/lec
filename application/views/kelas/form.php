<?php 
  $action = base_url($slug);
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
  $ns = empty($ids[0]) ? "" : $this->m_users->detail_users($ids[0]);
  $ns = empty($ns) ? "Pilih Siswa" : $ns['nama'].' ('.$ns['username'].')';
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
<form id="form-kelas" action="<?= $action;?>" enctype="multipart/form-data" method="post">
  <div class="col-xs-12 col-sm-12 col-md-12 wrapper">      
    <div class="col-xs-12 col-sm-12 col-md-12 panel panel-primary form-daftar-offline">
      <div class="panel-body daftar">
        <?php if(!empty($id)) {?><input type="hidden" name="id" value="<?= $id; ?>"><?php }?>
        <div class="form-group">        
          <input type="text" class="form-control input" placeholder="Nama Kelas" name="nama" value="<?= $nama; ?>" required>          
        </div>
        <?php if(!empty($id)) {?>
        <div class="form-group">        
          <select name="status" id="status" class="form-control input" required>
            <option>Status Kelas</option>
            <option <?= ($status=="aktif") ? "selected" : ""; ?> value="aktif">Aktif</option>
            <option <?= ($status=="tidak aktif") ? "selected" : ""; ?> value="tidak aktif">Tidak Aktif</option>
          </select>       
        </div>
        <?php }?>
        <div class="form-group">        
          <select name="tipe" id="tipekelas" class="form-control input" required>
            <option>Tipe Kursus</option>
            <option <?= ($tipe=="private") ? "selected" : ""; ?> value="private">Private</option>
            <option <?= ($tipe=="group") ? "selected" : ""; ?> value="group">Group</option>
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
        <div class="form-group">        
          <input type="number" class="form-control input" placeholder="Jumlah Pertemuan" name="pertemuan" max="15" value="<?= $pertemuan; ?>" required>          
        </div>
        <div class="form-group">        
          <select name="level" id="level" class="form-control input" required>
            <option>Target Level</option>
            <?php foreach($targetlevel as $key => $val) {?>
            <option <?= ($level == $key) ? "selected" : ""; ?> value="<?= $key;?>"><?= $val;?></option>
            <?php }?>
          </select>       
        </div>
        <div id="siswa-ops" class="form-group c-selectbox">
          <?php if($tipe == 'group') {?>
          <div id="c-siswa" class="c-tag <?= !empty($csiswa) ? '' : 'bye'; ?>">
            <?php if(!empty($csiswa)) {foreach($csiswa as $val) { ?>
            <div class="item-tag">
                <?= $val->nama .' ('.$val->username.')'; ?>
                <input class="inptidsiswa" type="hidden" name="id_siswa[]" value="<?= $val->id;?>" required />
                <span data-value="<?= $val->id;?>" class="delete-tag fa fa-times"></span>
            </div>
            <?php } }?>
            <div class="clearfix"></div>
          </div>     
          <a href="javascript:;" class="selectbox">Pilih Siswa <span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchsiswa" type="text" autocomplete="off" class="form-control" placeholder="Cari Siswa"> 
            <ul class="lists">
              <?php if(!empty($uniqsiswa)) { foreach($uniqsiswa as $val) { ?>
                <li data-value="<?=$val->id;?>" data-target="c-siswa" class="addlist"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
              <?php } } ?>
            </ul>
         </div>
         <?php } else if($tipe == 'private') {?>
         <a href="javascript:;" class="selectbox"><span class="text"><?= $ns;?></span><span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchsiswa-private" class="form-control" type="text" placeholder="Cari Siswa">
            <input class="vs" type="hidden" name="id_siswa" value="<?=$ids[0];?>">
            <ul class="lists data-selectbox">
                <?php if(!empty($siswa)) { foreach($siswa as $val) { ?>
                <li data-value="<?=$val->id;?>"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
                <?php } }?>
            </ul>
          </div>
         <?php }?>
        </div>
        <div class="form-group c-selectbox">
          <a href="javascript:;" class="selectbox"><span class="text"><?= $np;?></span><span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchpengajar" class="form-control" type="text" placeholder="Cari Pengajar">
            <input class="vs" type="hidden" name="id_pengajar" value="<?=$idp;?>">
            <ul class="lists data-selectbox">
                <?php if(!empty($pengajar)) { foreach($pengajar as $val) { ?>
                <li data-value="<?=$val->id;?>"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
                <?php } }?>
            </ul>
          </div>
        </div>                                           
        <div class="col-md-12 text-center">
          <a href="<?= base_url('kelas'); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
          <button type="submit" class="btn btn-success">Simpan</button>   
          <div class="alert alert-danger"></div>    
        </div>      
      </div>
    </div>
  </div>
</form>
<script>
  var siswa = <?=json_encode($uniqsiswa);?>,
      bsiswa = <?=json_encode($siswa);?>,
      pengajar = <?=json_encode($pengajar);?>,
      tipekelas = '';
  $(".timepicker").timepicker({
    dropdown: true,    
    minTime: '10:00AM',
    maxTime: '06:00PM'
  });

  (function (js){
    'use strict';
    // OPEN DROPDOWN TAG
    js(document).on('click', '.selectbox', function(e) {
      var dd = js(this).next(".c-lists");
      $(this).toggleClass('active');
      dd.fadeToggle(400);
      js(".selectbox").not(this).removeClass('active').next(".c-lists").fadeOut(200);
      e.preventDefault();
    });

    // add lists
    js(document).on('click', '.addlist', function () {
      var that = js(this),
          val = that.data("value"),
          text = that.text(),
          target = that.data("target"),
          html = `<div class="item-tag">
                    `+text+`
                    <input class="inptidsiswa" type="hidden" name="id_siswa[]" value="`+val+`" required />
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

      console.log(val);
      bsiswa.forEach( function(v, index) {
        if(v.id == val) {
          siswa.push(bsiswa[index]);
          html+='<li data-value="'+v.id+'" data-target="c-siswa" class="addlist"><span> '+v.nama+' ('+v.username+')</span></li>';
        }
      });
      that.parents('.c-selectbox').find('.lists').append(html);
      that.parent().remove();
      if($(".c-tag .item-tag").length < 1) {
        $('.c-tag').addClass('bye');
      } 
    });

    // SEARCH NAME SISWA
    js(document).on('keyup', '#searchsiswa', function () {
      var that = js(this),
          val = that.val(),
          html = "",
          isFound = false;
      if(siswa.length > 0) {
        siswa.forEach( function(v, index) {
          if(v.nama.toLowerCase().search(val.toLowerCase()) > -1) {
            isFound = true;
            html+='<li data-value="'+v.id+'" data-target="c-siswa" class="addlist"><span> '+v.nama+' ('+v.username+')</span></li>';
          } 
        });
      } else {
        html += '<li><span>Tidak Ditemukan</span></li>';
      }
      if(!isFound) {
        html += '<li><span>Tidak Ditemukan</span></li>';
      }
      that.next().html(html);
    });

    js(document).on('keyup', '#searchpengajar', function () {
      var that = js(this),
          val = that.val(),
          html = "",
          isFound = false;
      if(pengajar.length > 0) {
        pengajar.forEach( function(v, index) {
          if(v.nama.toLowerCase().search(val.toLowerCase()) > -1) {
            isFound = true;
            html+='<li data-value="'+v.id+'"><span> '+v.nama+' ('+v.username+')</span></li>';
          }
        });
      } else {
        html += '<li><span>Tidak Ditemukan</span></li>';
      }
      if(!isFound) {
        html += '<li><span>Tidak Ditemukan</span></li>';
      }
      that.siblings('.lists').html(html);
    });

    js(document).on('keyup', '#searchsiswa-private', function () {
      var that = js(this),
          val = that.val(),
          html = "",
          isFound = false;
      if(bsiswa.length > 0) {
        bsiswa.forEach( function(v, index) {
          if(v.nama.toLowerCase().search(val.toLowerCase()) > -1) {
            isFound = true;
            html+='<li data-value="'+v.id+'"><span> '+v.nama+' ('+v.username+')</span></li>';
          }
        });
      } else {
        html += '<li><span>Tidak Ditemukan</span></li>';
      }
      if(!isFound) {
        html += '<li><span>Tidak Ditemukan</span></li>';
      }
      that.siblings('.lists').html(html);
    });

    js(document).on('click', '.data-selectbox li', function () {
      var that = js(this),
          val = that.data("value"),
          text = that.text(),
          parent = that.parent(),
          parents = that.parents(".c-selectbox");
      parent.prev('input').val(val);
      parents.children('.selectbox').children('.text').text(text);
      parents.children('.c-lists').fadeOut(100);
    });

    js("#form-kelas").submit(function (e) {
      var status  = true; 
      if(tipekelas == 'group') {
        if(js(".inptidsiswa").length < 1) {
          js(".alert").text("Siswa tidak boleh kosong.");
          status = false;
        }  
      } else {
        if(js("input[name=id_siswa]").val() === '') {
          js(".alert").text("Siswa tidak boleh kosong.");
          status = false;
        }  
      }
      if(js(".vs").val() === "") {
        js(".alert").text("Pengajar tidak boleh kosong.");
        status = false;
      }

      if(status) {
        js(".alert").fadeOut(200);
      } else {
        js(".alert").fadeIn(200);
        e.preventDefault();
      }
    });

    js(document).on('change', '#tipekelas', function () {
      var that = js(this),
          html = '';
      tipekelas = that.val();
      if(tipekelas === 'group') {
        html = `<div id="c-siswa" class="c-tag <?= !empty($csiswa) ? '' : 'bye'; ?>">
            <?php if(!empty($csiswa)) {foreach($csiswa as $val) { ?>
            <div class="item-tag">
                <?= $val->nama .' ('.$val->username.')'; ?>
                <input class="inptidsiswa" type="hidden" name="id_siswa[]" value="<?= $val->id;?>" required />
                <span data-value="<?= $val->id;?>" class="delete-tag fa fa-times"></span>
            </div>
            <?php } }?>
            <div class="clearfix"></div>
          </div>     
          <a href="javascript:;" class="selectbox">Pilih Siswa <span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchsiswa" type="text" autocomplete="off" class="form-control" placeholder="Cari Siswa"> 
            <ul class="lists">
              <?php if(!empty($uniqsiswa)) { foreach($uniqsiswa as $val) { ?>
                <li data-value="<?=$val->id;?>" data-target="c-siswa" class="addlist"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
              <?php } }?>
            </ul>
         </div>`;
      } else {
        html = `<a href="javascript:;" class="selectbox"><span class="text"><?= $ns;?></span><span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchsiswa-private" class="form-control" type="text" placeholder="Cari Siswa">
            <input class="vs" type="hidden" name="id_siswa" value="<?= isset($ids[0]) ? $ids[0]: "";?>">
            <ul class="lists data-selectbox">
                <?php if(!empty($siswa)) { foreach($siswa as $val) { ?>
                <li data-value="<?=$val->id;?>"><span><?=$val->nama;?> (<?=$val->username;?>)</span></li>
                <?php } } ?>
            </ul>
          </div>`;
      }
      js("#siswa-ops").html(html);
    });
  })(jQuery)
</script>
