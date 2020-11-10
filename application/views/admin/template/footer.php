-- Bootstrap core JavaScript-->
<script src="<?php echo base_url() ?>assets/login/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/login/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url() ?>assets/login/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url() ?>assets/login/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url() ?>assets/login/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url() ?>assets/login/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url() ?>assets/login/js/demo/chart-pie-demo.js"></script>

<!-- Datatables -->
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#list_member').DataTable();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#list_barang').DataTable();
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#transaksi').DataTable();
    });
</script>
</body>

</html>