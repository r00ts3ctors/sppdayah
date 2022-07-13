  <footer class="footer footer-static footer-light navbar-shadow">
      <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
          <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022 <a class="text-bold-800 grey darken-2" href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">MAULANA </a>, All rights reserved. </span>
          <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">Hand-crafted & Made with <i class="ft-heart pink"></i></span>
      </p>
  </footer>
  <!-- BEGIN VENDOR JS-->
  <script src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/ui/jquery.sticky.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/data/jvector/visitor-data.js" type="text/javascript"></script>
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN MODERN JS-->
  <script src="<?php echo base_url('assets/'); ?>app-assets/js/core/app-menu.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/js/core/app.js" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/js/scripts/customizer.js" type="text/javascript"></script>
  <!-- END MODERN JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script type="text/javascript" src="<?php echo base_url('assets/'); ?>app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
  <script src="<?php echo base_url('assets/'); ?>app-assets/js/scripts/pages/dashboard-sales.js" type="text/javascript"></script>
  <!-- END PAGE LEVEL JS-->

  <script type="text/javascript">
      $(document).ready(function() {
          $("#jumlah, #harga").keyup(function() {
              var harga = $("#harga").val();

              var total = parseInt(harga) - parseInt(300000);
              $("#total").val(total);
          });

          var rupiah = document.getElementById('harga');
          rupiah.addEventListener('keyup', function(e) {
              // tambahkan 'Rp.' pada saat form di ketik
              // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
              rupiah.value = formatRupiah(this.value, 'Rp. ');
          });

          function formatRupiah(angka, prefix) {
              var number_string = angka.replace(/[^,\d]/g, '').toString(),
                  split = number_string.split(','),
                  sisa = split[0].length % 3,
                  rupiah = split[0].substr(0, sisa),
                  ribuan = split[0].substr(sisa).match(/\d{3}/gi);

              // tambahkan titik jika yang di input sudah menjadi angka ribuan
              if (ribuan) {
                  separator = sisa ? '.' : '';
                  rupiah += separator + ribuan.join('.');
              }

              rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
              return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
          }


      });
  </script>

  </body>

  </html>