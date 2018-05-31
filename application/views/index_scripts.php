<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<script type="text/javascript">
	
	$(function() {
	<?php if ($this->session->added==1) : ?>
		swal({title:"",html:"Utente aggiunto",type:"success"});			
	<?php endif ?>
	<?php if (isset($this->session->not_added)) : ?>
	console.log("ciao");
		swal({title:"",html:"<?= $this->session->not_added ?>",type:"error"});			
	<?php endif ?>
	
	});
	
</script>
