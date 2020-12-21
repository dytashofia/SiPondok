<footer class="footer footer-static footer-light navbar-border navbar-shadow">
    <div class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">2018 &copy; Copyright <a class="text-bold-800 grey darken-2" href="https://themeselection.com" target="_blank">ThemeSelection</a></span>
        <ul class="list-inline float-md-right d-block d-md-inline-blockd-none d-lg-block mb-0">
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/" target="_blank"> More themes</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/support" target="_blank"> Support</a></li>
            <li class="list-inline-item"><a class="my-1" href="https://themeselection.com/products/chameleon-admin-modern-bootstrap-webapp-dashboard-html-template-ui-kit/" target="_blank"> Purchase</a></li>
        </ul>
    </div>
</footer>



<!-- BEGIN VENDOR JS-->
<script src="<?php echo base_url(); ?>theme-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="<?php echo base_url(); ?>theme-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN CHAMELEON  JS-->
<script src="<?php echo base_url(); ?>theme-assets/js/core/app-menu-lite.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>theme-assets/js/core/app-lite.js" type="text/javascript"></script>
<!-- END CHAMELEON  JS-->
<script src="<?php echo base_url(); ?>assets/tables/js/jquery.dataTables.min.js" type=" text/javascript"> </script>
<script src="<?php echo base_url(); ?>assets/tables/js/datatable/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/tables/js/datatable-init/datatable-basic.min.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL JS-->
<!-- <script src="<?php echo base_url(); ?>theme-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script> -->
<!-- END PAGE LEVEL JS-->
<!-- BEGIN PAGE LEVEL JS-->

<script src="<?php echo base_url(); ?>theme-assets/js/scripts/charts/chartjs/bar/bar.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>theme-assets/js/scripts/charts/chartjs/line/line.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>theme-assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>theme-assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>theme-assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/file_izin/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/file_izin/js/bootstrap.min.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
 
        $('#submit').submit(function(e){
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/santri/Santri/aksiTambahperizinan',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          window.location.replace('<?php echo base_url();?>index.php/santri/Santri/perizinan');
                   }
                 });
            });
         
 
    });
     
</script>



<script type="text/javascript">
    $(document).ready(function(){
 
        $('#edit').submit(function(e){  
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>index.php/santri/Santri/updateperizinan',
                     type:"post",
                     data:new FormData(this),
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(data){
                          window.location.replace('<?php echo base_url();?>index.php/santri/Santri/perizinan');
                   }
                 });
            });
         
 
    });
     


<!-- END PAGE LEVEL JS-->



</body>

</html>