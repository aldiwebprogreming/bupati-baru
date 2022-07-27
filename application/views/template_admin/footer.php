

<footer class="main-footer">
  <strong>Copyright &copy; <?= date('Y') ?> <a href="https://adminlte.io">Caberawit Prinitng</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?= base_url('assets_admin/') ?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets_admin/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets_admin/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets_admin/') ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets_admin/') ?>dist/js/demo.js"></script>
<script src="<?= base_url('assets_admin/') ?>plugins/summernote/summernote-bs4.min.js"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script src="<?= base_url()  ?>assets_admin/alert.js"></script>
<?php echo "<script>".$this->session->flashdata('message')."</script>"?>

<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
  })
</script>

<script>
  $("#formConfig").submit(function (e) {
    $('#configuration').modal('hide');
    Swal.fire({
      icon: 'success',
      title: 'Success',
      text: 'Configuration has been setup',
      confirmButtonText: 'Close',
    })

    e.preventDefault();
    return false;
  });


  $("#formRequestData").submit(function (e) {
    let unindexed_array_config = $('#formConfig').serializeArray();
    let unindexed_array_payment_request = $('#formRequestData').serializeArray();
    let indexed_array = {};

    $.map(unindexed_array_config, function (n) {
      indexed_array[n['name']] = n['value'];
    });

    $.map(unindexed_array_payment_request, function (n, i) {
      indexed_array[n['name']] = n['value'];
    });

    indexed_array['clientId'] = $("#clientId").val();
    indexed_array['sharedKey'] = $("#sharedKey").val();
    indexed_array['customerName'] = $("#customerName").val();
    indexed_array['email'] = $("#email").val();
    indexed_array['phoneNumber'] = $("#phoneNumber").val();
    indexed_array['address'] = $("#address").val();
    indexed_array['country'] = $("#country option:selected").val();
    indexed_array['expiredTime'] = parseInt($("#expiredTime").val());
    indexed_array['amount'] = $("#amount").val();

    $.ajax({
      type: "POST",
      dataType: "JSON",
      data: JSON.stringify(indexed_array),
      url: "jokul-checkout.php",
      contentType: "application/json",
      success: function (result) {
        loadJokulCheckout(result.response.payment.url);
      },
      error: function(xhr, textStatus, error){
        Swal.fire({
          icon: 'error',
          title: 'Order Failed',
          confirmButtonText: 'Close',
        })
      }

    });
    e.preventDefault();
    return false;
  });


</script>

</body>
</html>
