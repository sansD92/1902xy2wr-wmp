<script src="<?php echo base_url()?>assets/backend/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/adminlte.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/dashboard.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/demo.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/jquery-ui.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/jquery.knob.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/moment.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/sparkline.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/daterangepicker.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/bs-custom-file-input.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url()?>assets/backend/js/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url()?>assets/backend/summernote/summernote-bs4.min.js"></script>
<script src="<?php echo base_url()?>assets/backend/tag/js/tag-it.min.js"></script>
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
