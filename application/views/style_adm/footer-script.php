
    <!-- javascripts -->
  <script src="<?=base_url();?>template_adm/js/jquery.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery-ui-1.10.4.min.js"></script>
    <script src="<?=base_url();?>template_adm/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?=base_url();?>template_adm/js/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?=base_url();?>template_adm/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?=base_url();?>template_adm/js/jquery.scrollTo.min.js"></script>
    <script src="<?=base_url();?>template_adm/js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?=base_url();?>template_adm/assets/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?=base_url();?>template_adm/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?=base_url();?>template_adm/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="js/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?=base_url();?>template_adm/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?=base_url();?>template_adm/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?=base_url();?>template_adm/js/calendar-custom.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?=base_url();?>template_adm/js/jquery.customSelect.min.js" ></script>
	<script src="<?=base_url();?>template_adm/assets/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?=base_url();?>template_adm/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?=base_url();?>template_adm/js/sparkline-chart.js"></script>
    <script src="<?=base_url();?>template_adm/js/easy-pie-chart.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?=base_url();?>template_adm/js/xcharts.min.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery.autosize.min.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery.placeholder.min.js"></script>
	<script src="<?=base_url();?>template_adm/js/gdp-data.js"></script>	
	<script src="<?=base_url();?>template_adm/js/morris.min.js"></script>
	<script src="<?=base_url();?>template_adm/js/sparklines.js"></script>	
	<script src="<?=base_url();?>template_adm/js/charts.js"></script>
	<script src="<?=base_url();?>template_adm/js/jquery.slimscroll.min.js"></script>
         <script src="<?=base_url();?>template_adm/js/jquery.validate.min.js"></script>

<script src="<?=base_url();?>template_adm/js/form-validation-script.js"></script>

  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

</script> 

<script>
  $(document).ready(function(){
    $('#form_upload').on('submit', function(e){
      e.preventDefault();
      if ($('#img_file').val()=='') {
        alert("Selecione uma imagem");
      }
    });
  });
</script>

  </body>
</html>
