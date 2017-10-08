
  <!-- panggil main.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-range/2.2.0/moment-range.min.js"></script>  
  <script src="<?php echo base_url() ?>assets/js/plugin/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script> 
  <script>

	$(document).ready(function(){			
    	
    	//alert(tomorow);
    	var date = $(".date-update").val();
		$(".date").datetimepicker({
			format:"DD/MM/YYYY"
		});
	});

	<!-- select private hidden -->
	$("#kelas").change(function()
    {
        if($(this).val() == "Group")
    {
        $('label[for="nama_group"]').show();
        $("#nama_group").show();
    }
    else
    {        
        $("#nama_group").hide();
    }
        });

  $('#add').click(function(){
    var i = $('input').size()+1,
      input = '<div id="box' + i + '">';
        input += '<div class="col-md-12 input_data">';
          input += '<div class="col-md-2 input_group form-group margin">';
            input += '<input class="form-control input" placeholder="Nama Siswa" name="nama_siswa[]" id="nama_siswa-' + i + '" />';
          input += '</div>';
        
          input += '<div class="col-md-2 input_group form-group margin">';
            input += '<div class="input-group date" data-provide="datepicker" style="width: 100% !important;">';
              input += '<input  class="form-control date" placeholder="Tanggal Lahir" name="tgl_lahir[]" id="tgl_lahir-' + i + '" />';
            input += '</div>';
          input += '</div>';

          input += '<div class="col-md-2 input_group form-group margin">';
            input += '<input class="form-control input" placeholder="Alamat" name="alamat[]" id="alamat-' + i + '" />';
          input += '</div>';

          input += '<div class="col-md-2 input_group form-group margin">';
            input += '<input class="form-control input" placeholder="Telpon" name="telpon[]" id="telpon-' + i + '" />';
          input += '</div>';

          input += '<div class="col-md-2 input_group form-group margin">';
            input += '<input class="form-control input" placeholder="Email" name="email[]" id="email-' + i + '" />';
          input += '</div>';

          input += '<a href="#" id="hapus" class="btn btn-danger">Hapus</a></div>';
      $('#box').append(input);

      i++;
      return false;
    });

    $('body').on('click', '#hapus', function(){
      $(this).parent('div').remove();
    })
  </script>
    
</body>

</html>