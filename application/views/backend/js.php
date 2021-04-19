<script src="<?php echo base_url()?>bahan/backend/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/dashboard.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/demo.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/jquery.knob.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/moment.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/sparkline.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/daterangepicker.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/bs-custom-file-input.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>bahan/backend/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url()?>bahan/backend/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url()?>bahan/backend/tag/js/tag-it.min.js"></script>
<script type="text/javascript">
  $(function () {
    $('.textarea').summernote()
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
<script type="text/javascript">
  $(function () {
    $("#example1").DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": false,
      "info": true,
      "autoWidth": true,
    });
  });
</script>
<script>

   <?php
   $sql = "select * from keyword order by 1";
   $a = $this->db->query($sql)->result();

   ?>
   var sampleTags = [<?php
   foreach($a as $b) echo "'$b->keyword_nama', ";?>];
  $('.tags').tagit({
                availableTags: sampleTags,
                allowSpaces: true,
                singleField: true,
                singleFieldNode: $('#blogs_keyword')
            });
</script>

    <script>
        var hoursLabel = document.getElementById("hours");
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        setInterval(setTime, 1000);

        function setTime() {
            secondsLabel.innerHTML = pad(Math.floor(new Date().getSeconds()));
            minutesLabel.innerHTML = pad(Math.floor(new Date().getMinutes()));
            hoursLabel.innerHTML = pad(Math.floor(new Date().getHours()));
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }

        <?php if(@$this->session->absen_needed): ?>
            var absenNeeded = '<?= json_encode($this->session->absen_needed) ?>';
            <?php $this->session->sess_unset('absen_needed') ?>
        <?php endif; ?>
    </script>
