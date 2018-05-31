<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script src="//code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?= site_url('assets/js/jasny-bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery-ui-timepicker-addon.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/sweetalert2.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.tablesorter.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.tablesorter.pager.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.tablesorter.widgets.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/my_tablesorter.js') ?>"></script>

<!-- per mappa -->
<script type="text/javascript" src="<?php echo site_url('assets/js/hammer.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/jquery.mousewheel.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/js/map_script.js') ?>"></script>
<script type="text/javascript" src="<?php echo site_url('assets/mapplic/mapplic.js') ?>"></script>

<script type="text/javascript" src="<?php echo site_url('assets/js/common.js'); ?>"></script>
<script type="text/javascript">
	// forzo generazione LTA giornaliero
	$("#forcelta").click(function() {
		swal({
		  title: "",
		  html: "Vuoi forzare la generazione del file LTA giornaliero?",
		  type: "info",
		  confirmButtonColor: "#3085d6",
		  confirmButtonText: "Procedi",
		  showCancelButton: true,
		  cancelButtonText: "Annulla"
		}).then(function () {
			var url="<?= site_url('report/forcelta') ?>";
			$.get(url,function(resp) {
				resp=JSON.parse(resp);
				var type=resp.esito==1 ? "success" : "error";
				swal({title:"",html:resp.return,type:type});				
			});
		});
		
	});
	
	// forzo generazione LOG giornaliero
	$("#forcelog").click(function() {
		swal({
		  title: "",
		  html: "Vuoi forzare la generazione del file LOG giornaliero?",
		  type: "info",
		  confirmButtonColor: "#3085d6",
		  confirmButtonText: "Procedi",
		  showCancelButton: true,
		  cancelButtonText: "Annulla"
		}).then(function () {
			var url="<?= site_url('report/forcelog') ?>";
			$.get(url,function(resp) {
				resp=JSON.parse(resp);
				var type=resp.esito==1 ? "success" : "error";
				swal({title:"",html:resp.return,type:type});				
			});
		});
		
	});

	$(document).ready(function() {
		$('.js-dropdown').select2();
	});
</script>

<script type="text/javascript" src="<?php echo site_url('assets/js/select2.min.js'); ?>"></script>

<!-- DropDown Organizzatore + Loations + Evento -->
<script type="text/javascript" src="<?php echo site_url('assets/js/funzioni-servizio-search.js'); ?>"></script>

<!-- DateRange -->
<script>
    $(function(){
		$("#to").datepicker({ dateFormat: 'dd-mm-yy' });
        $("#from").datepicker({ dateFormat: 'dd-mm-yy' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("dd-mm-yy", minValue);
            minValue.setDate(minValue.getDate());
            $("#to").datepicker( "option", "minDate", minValue );
        })
    });
</script>
