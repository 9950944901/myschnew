
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">  
      Copyright © 2023 by <strong><span class="brix-text">Brixcode Technologies LLP.</span></strong> All Rights Reserved.
    </div>
    
  </footer><!-- End Footer -->


  


  <style>
    .header {
	background: linear-gradient(-45deg, #e9fabb, #ece0ff, #dbf5ff, #f3ffd8);
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.footer {
  position: fixed;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 5px;
  background-color: #efefef;
  text-align: center;
}
  </style>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    $('.delete-confirm').on('click', function (event) {
       event.preventDefault();
       const url = $(this).attr('href');
       swal({
           title: 'Are you sure?',
           text: 'Do you Want To Delete!',
           icon: 'warning',
           buttons: ["Cancel", "Yes"],
           }).then(function(value) {
           if (value) {
           window.location.href = url;
         }
       });
      });
 </script>

<script>
  $('.signout-confirm').on('click', function (event) {
     event.preventDefault();
     const url = $(this).attr('href');
     swal({
      title: 'Do you want to Sign Out?',
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
    filterSelection("")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("filterDiv");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
      
      console.log(c);
      $(".filterDiv").hide();
      $("." + c).show();
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function () {
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>

  <!-- Vendor JS Files -->
  <script src="<?php echo e(url('public/school/assets/vendor/apexcharts/apexcharts.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/chart.js/chart.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/echarts/echarts.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/quill/quill.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/simple-datatables/simple-datatables.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/tinymce/tinymce.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/assets/vendor/php-email-form/validate.js')); ?>"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo e(url('public/school/assets/js/main.js')); ?>"></script>

  <script src="<?php echo e(url('public/school/dist/plugins/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/jquery.dataTables.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/dataTables.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/dataTables.responsive.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/responsive.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/dataTables.buttons.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/buttons.bootstrap4.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/jszip.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/pdfmake.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/vfs_fonts.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/buttons.html5.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/buttons.print.min.js')); ?>"></script>
  <script src="<?php echo e(url('public/school/dist/js/buttons.colVis.min.js')); ?>"></script>


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

 

  <script>

    $(function () {
      $("#example10").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example10_wrapper .col-md-6:eq(0)');
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
      $("#example20").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example20_wrapper .col-md-6:eq(0)');
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
      $("#example11").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example11_wrapper .col-md-6:eq(0)');
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
      $("#example12").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example12_wrapper .col-md-6:eq(0)');
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
      $("#example13").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example13_wrapper .col-md-6:eq(0)');
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
      $("#example14").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example14_wrapper .col-md-6:eq(0)');
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
      $("#example15").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example15_wrapper .col-md-6:eq(0)');
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
      $("#example16").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example16_wrapper .col-md-6:eq(0)');
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
      $("#example17").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example17_wrapper .col-md-6:eq(0)');
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
      $("#example18").DataTable({
        "responsive": true, "lengthChange": true, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print",]
      }).buttons().container().appendTo('#example18_wrapper .col-md-6:eq(0)');
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.2.0/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: 'textarea#myTextarea',
    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
    imagetools_cors_hosts: ['picsum.photos'],
    menubar: 'file edit view insert format tools table help',
    toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
    toolbar_sticky: true,
    autosave_ask_before_unload: true,
    autosave_interval: "30s",
    autosave_prefix: "{path}{query}-{id}-",
    autosave_restore_when_empty: false,
    autosave_retention: "2m",
    image_advtab: true,
    /*content_css: '//www.tiny.cloud/css/codepen.min.css',*/

    image_class_list: [
      { title: 'None', value: '' },
      { title: 'Some class', value: 'class-name' }
    ],
    importcss_append: true,
    file_picker_callback: function (callback, value, meta) {
      / Provide file and text for the link dialog /
      if (meta.filetype === 'file') {
        callback('', { text: 'My text' });
      }

      / Provide image and alt text for the image dialog /
      if (meta.filetype === 'image') {
        callback('', { alt: 'My alt text' });
      }

      / Provide alternative source and posted for the media dialog /
      if (meta.filetype === 'media') {
        callback('movie.mp4', { source2: 'alt.ogg', poster: '' });
      }
    },
    templates: [
      { title: 'New Table', description: 'creates a new table', content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>' },
      { title: 'Starting my story', description: 'A cure for writers block', content: 'Once upon a time...' },
      { title: 'New list with dates', description: 'New List with dates', content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>' }
    ],
    template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
    template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
    height: 300,
    image_caption: true,
    quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
    noneditable_noneditable_class: "mceNonEditable",
    toolbar_mode: 'sliding',
    contextmenu: "link image imagetools table",
  });
</script>

</body>
</html><?php /**PATH /home/u640337273/domains/biddersy.com/public_html/school/resources/views/layouts/footer.blade.php ENDPATH**/ ?>