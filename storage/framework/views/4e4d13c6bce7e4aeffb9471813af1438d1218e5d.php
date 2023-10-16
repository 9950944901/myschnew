<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023. <a
          href="https://www.brixcodetechnologies.com/welcome" target="_blank">Brixcode Technologies LLP</a>
        All rights reserved.</span>
      
    </div>
  </footer>
  <!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="<?php echo e(url('/')); ?>/public/student/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo e(url('/')); ?>/public/student/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/js/dataTables.select.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo e(url('/')); ?>/public/student/js/off-canvas.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/js/hoverable-collapse.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/js/template.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/js/settings.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?php echo e(url('/')); ?>/public/student/js/dashboard.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/js/Chart.roundedBarCharts.js"></script>
<!-- End custom js for this page-->


<script src="<?php echo e(url('/')); ?>/public/student/assets/js/main.js"></script>


<script src="<?php echo e(url('/')); ?>/public/student/dist/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/jquery.dataTables.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/dataTables.responsive.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/dataTables.buttons.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/jszip.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/pdfmake.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/vfs_fonts.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/buttons.html5.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/buttons.print.min.js"></script>
<script src="<?php echo e(url('/')); ?>/public/student/dist/js/buttons.colVis.min.js"></script>
<script>
  $('.signout-confirm').on('click', function (event) {
     event.preventDefault();
     const url = $(this).attr('href');
     swal({
      title: 'Do you want to logout?',
      showDenyButton: true,
      showCancelButton: true,
      confirmButtonColor: '#673ab7',
      cancelButtonColor: '#363636',
      confirmButtonText: `Yes`,
      denyButtonText: `Don't Logout`,
      }).then(function(value) {
         if (value) {
         window.location.href = url;
       }
     });
    });
</script>
<script>

$(function () {
$("#example1").DataTable({
  "responsive": true, "lengthChange": true, "autoWidth": false,
  "buttons": ["copy", "csv", "excel", "pdf", "print",]
}).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
$('#example2').DataTable({
  "paging": true,
  "lengthChange": true,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false,
  "responsive": true,
});
});
</script>

<script>

$(function () {
$("#example9").DataTable({
  "responsive": true, "lengthChange": true, "autoWidth": false,
  "buttons": ["copy", "csv", "excel", "pdf", "print",]
}).buttons().container().appendTo('#example9_wrapper .col-md-6:eq(0)');
$('#example2').DataTable({
  "paging": true,
  "lengthChange": true,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false,
  "responsive": true,
});
});
</script>


</body>

</html><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/layouts/student-footer.blade.php ENDPATH**/ ?>