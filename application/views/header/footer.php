<script src="<?= base_url('assets/') ?>vendors/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/main.js"></script>


<script src="<?= base_url('assets/') ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/jszip/dist/jszip.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/pdfmake/build/vfs_fonts.js"></script>
<script src="<?= base_url('assets/') ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/') ?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="<?= base_url('assets/') ?>assets/js/init-scripts/data-table/datatables-init.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    // First load the chart once 
    drawSeriesChart();
    // Set interval to call the drawChart again
    setInterval(drawSeriesChart, 5000);
});
</script>
</body>

</html>