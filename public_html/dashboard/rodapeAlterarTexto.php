
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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


<!-- Jquery -->
<script src="vendor/jquery/jquery-2.2.0.min.js" type="text/javascript"></script>
<!-- MASK -->
<script type="text/javascript" src="vendor/jquery/jquery.mask.js"></script>
<!-- Bootstrap JS -->
<script src="vendor/bootstrap/js/bootstrap.js"></script>

<link rel="stylesheet" href="vendor/css/rodape.css">
<script src="dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="dashboard/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="dashboard/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="dashboard/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="dashboard/js/demo/datatables-demo.js"></script>


 <script src="vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>
     <script>
      // $(window).resize(function() {
      //   document.location.reload();
      // });

      $(document).on('ready', function() {
        let largura = screen.width
        if (largura > 767) {
          $(".center").slick({
            dots: false,
            infinite: false,
            centerMode: false,
            slidesToShow: 3,
            slidesToScroll: 1
          });
        } else {
          $(".center").slick({
            dots: false,
            infinite: false,
            centerMode: false,
            slidesToShow: 1,
            slidesToScroll: 1
          });
        }
      });
    </script>




