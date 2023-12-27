 <!-- Footer -->
 <footer class="sticky-footer bg-light">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright &copy; Toko Mas Wahyu Redjo &bull; 2023 &bull; by "_" </span>
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
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Yakin ingin logout?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Klik "Logout" dibawah ini jika anda yakin ingin logout.</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>//<?php echo 'username' ?>">Logout</a>
             </div>
         </div>
     </div>
 </div>

 <!-- SweetALert -->
 <script src="<?= base_url('assets/js/') ?>sweet.js"></script>

 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

 <!-- Datepicker -->
 <script src="<?= base_url(); ?>assets/vendor/daterangepicker/moment.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/daterangepicker/daterangepicker.min.js"></script>

 <!-- Page level plugins -->
 <script src="<?= base_url(); ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/dataTables.buttons.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/jszip/jszip.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/pdfmake.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/pdfmake/vfs_fonts.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.html5.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.print.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/buttons/js/buttons.colVis.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/dataTables.responsive.min.js"></script>
 <script src="<?= base_url(); ?>assets/vendor/datatables/responsive/js/responsive.bootstrap4.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="js/demo/datatables-demo.js"></script>

 <script src="<?= base_url(); ?>assets/vendor/gijgo/js/gijgo.min.js"></script>



 </body>

 </html>