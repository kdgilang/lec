     
    <!-- panggil main.js -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-range/2.2.0/moment-range.min.js"></script>  

    <!-- <panggil datepicker> -->
    <script src="<?php echo base_url() ?>assets/js/plugin/datetimepicker/bootstrap-datetimepicker.min.js"></script>

    <script>  
      $(document).ready(function(){     
          
        //alert(tomorow);
        var date = $(".date-update").val();
        $(".input-daterange input").datetimepicker({
          format:"DD/MM/YYYY"
        });
      });
    </script> 

    </body>
    </html>