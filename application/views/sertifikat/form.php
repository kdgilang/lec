<?php 
  $action = base_url($slug);
  if(!empty($id)) {
    $action .= '/edit';
    $title .= '&nbsp;Ubah';
  } else {
    $action .= '/add';
    $title .= '&nbsp;Tambah';
  }
  $status = empty($sertifikat['status']) ? "" : $sertifikat['status'];
  $tgl_cetak = empty($sertifikat['tgl_cetak']) ? "" : $sertifikat['tgl_cetak'];
  $tgl_terbit = empty($sertifikat['tgl_terbit']) ? "" : $sertifikat['tgl_terbit'];
  $tgl_ambil = empty($sertifikat['tgl_ambil']) ? "" : $sertifikat['tgl_ambil'];
  $id_operator = empty($sertifikat['id_operator']) ? "" : $sertifikat['id_operator'];
  $id_siswa = empty($sertifikat['id_siswa']) ? "" : $sertifikat['id_siswa'];
  $id_pengajar = empty($sertifikat['id_pengajar']) ? "" : $sertifikat['id_pengajar'];
  $level = empty($sertifikat['level']) ? 0 : $sertifikat['level'];
  $ids = empty($sertifikat->id_siswa) ? array() : explode(",", $sertifikat->id_siswa);
  $idp = empty($sertifikat->id_pengajar) ? "" : $sertifikat->id_pengajar;
  $np = empty($idp) ? "" : $this->m_users->detail_users($idp);
  $np = empty($np) ? "Pilih Pengajar" : $np['nama'].' ('.$np['username'].')';
  $ns = empty($ids[0]) ? "" : $this->m_users->detail_users($ids[0]);
  $ns = empty($ns) ? "Pilih Siswa" : $ns['nama'].' ('.$ns['username'].')';
?>
<!-- form pendaftaran -->
<div class="col-xs-12 col-sm-3"></div>
<div class="col-xs-12 col-sm-6">
  <form id="form-pengumuman" action="<?= $action;?>" method="post">    
    <div class="panel panel-primary form-daftar-offline">
      <div class="panel-body daftar">
        <?php if(!empty($id)) {?><input type="hidden" name="id" value="<?= $id; ?>"><?php }?>
        <div class="form-group margin">        
          <select class="form-control input"  name="status">
            <option <?= ($status == 'dalam proses') ? "selected" : "";?> value="dalam proses">Dalam Proses</option>
            <option <?= ($status == 'selesai') ? "selected" : "";?> value="selesai">Selesai</option>
          </select>          
        </div>
        <div class="form-group">
          <input class="form-control input date" name="tgl_cetak" type="text" placeholder="Tanggal Cetak" value="<?= $tgl_cetak; ?>" required>
        </div>
        <div class="form-group">
          <input class="form-control input date" name="tgl_terbit" type="text" placeholder="Tanggal Terbit" value="<?= $tgl_terbit; ?>" required>
        </div>
        <div class="form-group">
          <input class="form-control input date" name="tgl_ambil" type="text" placeholder="Tanggal Ambil" value="<?= $tgl_ambil; ?>">               
        </div> 
        <div class="form-group">        
          <select name="level" id="level" class="form-control input" required>
            <option>Target Level</option>
            <?php foreach($targetlevel as $key => $val) {?>
            <option <?= ($level == $key) ? "selected" : ""; ?> value="<?= $key;?>"><?= $val;?></option>
            <?php }?>
          </select>       
        </div>
        <div class="form-group c-selectbox">
         <a href="javascript:;" class="selectbox"><span class="text"><?= $ns;?></span><span class="fa fa-angle-down"></span></a>
          <div class="c-lists">
            <input id="searchsiswa-private" class="form-control" type="text" placeholder="Cari Siswa">
            <input class="vs" type="hidden" name="id_siswa" value="<?= isset($ids[0]) ? $ids[0] : '';?>">
            <ul class="lists data-selectbox">
                <?php if(!empty($siswa)) { foreach($siswa as $val) { ?>
                <li data-value="<?=$val->id;?>"><span><?= $val->nama;?> (<?=$val->username;?>)</span></li>
                <?php } }?>
            </ul>
          </div>
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

        <div class="col-xs-12 text-center">
          <a href="<?= base_url($slug); ?>" class="btn btn-default"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Kembali</a>
          <input type="submit" class="btn btn-success" value="Simpan">     
          <div class="alert alert-danger"></div> 
        </div>      
      </div>
    </div>
  </form>
</div>
<div class="col-xs-12 col-sm-3"></div>

<script>
  var siswa = <?= !empty($uniqsiswa) ? json_encode($uniqsiswa) : '""';?>,
      bsiswa = <?= !empty($siswa) ? json_encode($siswa) : '""';?>,
      pengajar = <?= !empty($pengajar) ? json_encode($pengajar) : '""';?>;
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

    js(document).on('keyup', '#searchpengajar', function () {
      var that = js(this),
          val = that.val(),
          html = "";
        if(pengajar.length > 0) {
          pengajar.forEach( function(v, index) {
            if(v.username.search(val) > -1) {
              html+='<li data-value="'+v.id+'"><span> '+v.nama+' ('+v.username+')</span></li>';
            } else {
              html += '<li><span>Tidak Ditemukan</span></li>';
            }
          });
        } else {
          html += '<li><span>Tidak Ditemukan</span></li>';
        }
      that.siblings('.lists').html(html);
    });

    js(document).on('keyup', '#searchsiswa-private', function () {
      var that = js(this),
          val = that.val(),
          html = "";
        if(bsiswa.length > 0) {
          bsiswa.forEach( function(v, index) {
            if(v.username.search(val) > -1) {
              html+='<li data-value="'+v.id+'"><span> '+v.nama+' ('+v.username+')</span></li>';
            } else {
              html += '<li><span>Tidak Ditemukan</span></li>';
            }
          });
        } else {
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

      if(js("input[name=id_siswa]").val() === '') {
        js(".alert").text("Siswa tidak boleh kosong.");
        status = false;
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
  })(jQuery)
</script>
