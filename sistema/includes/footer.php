<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Lorena Mora <?php echo date("Y"); ?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<!-- <a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a> -->
<a href="#page-top" style="border-radius:50px; background-color: #800000"class="scroll-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="login.html">Logout</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/all.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>
<script src="js/sweetalert2@10.js"></script>
<script type="text/javascript" src="js/producto.js"></script>



<!-- Datatable -->
<!--   Datatables-->
  <script type="text/javascript"
    src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>

  <!-- extension responsive -->
  <script
    src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
  <link rel="stylesheet" type="text/css"
    href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
  <script
    src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.18/datatables.min.js"></script>
  

    <script type="text/javascript">
        $(document).ready(function () {
            
            var table = $('#mydatatable').DataTable({
                "dom": 'B<"float-left"i><"float-right"f>t<"float-left"l><"float-right"p><"clearfix">',
                "responsive": true,
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
                },
                "buttons": ['copy','csv', 'excel', 'print']
        
            });
        });
    </script>







<!-- Buttons -->
  <link rel="stylesheet"
    href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <script
    src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script
    src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script
    src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
  <script
    src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
  <script
    src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script
    src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!-- Core plugin JavaScript-->

<!-- Core plugin JavaScript-->
<script src="jquery/jquery-latest.js">
      </script>
      <script src="js/bootstrap.min.js"></script>
      <script src="jquery/jquery.min.js"></script>

<script src="js/sweetalert2@10.js"></script>

</body>

</html>