<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url() ?>">A.T. BACKOFFICE v1.0</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">   
		<li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gestione <span class="caret"></span></a>
          <ul class="dropdown-menu multi-level">		
			<?php if ($this->session->bo_user->level > 2) : ?>
            <li><a href="<?php echo site_url('cnusers') ?>">Utenti Applicativi</a></li>  
            <?php endif ?>       
            <?php if ($this->session->bo_user->level > 1) : ?>
            <li><a href="<?php echo site_url('bousers') ?>">Utenti Backoffice</a></li>
            <?php endif ?>
            <li><a href="<?php echo site_url('commonusers') ?>">Utenti Operatori</a></li>
            <li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Server Cassa</a>
				<ul class="dropdown-menu">	
					<li><a href="<?php echo site_url('scusers') ?>">Utenti</a></li>
					<li><a href="<?php echo site_url('cashdesks') ?>">Postazioni</a></li>
					<!--<li><a href="<?php echo site_url('pricetimes') ?>">Fasce orarie prezzi</a></li>-->
				</ul>
			</li>
			<li role="separator" class="divider"></li>
            <li class="dropdown-submenu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Server Accessi</a>
				<ul class="dropdown-menu">	
					<li><a href="<?php echo site_url('sausers') ?>">Utenti</a></li>
				</ul>
			</li>
				
			<li role="separator" class="divider"></li>
			
			<li class="dropdown-submenu">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tabelle SIAE</a>
				<ul class="dropdown-menu">	
					<li><a href="<?php echo site_url('titletype') ?>">Codici prezzo</a></li>
					<li><a href="<?php echo site_url('supportcode') ?>">Codici supporto</a></li>
					<li><a href="<?php echo site_url('areacode') ?>">Ordini posto</a></li>
					<li><a href="<?php echo site_url('otherincome') ?>">Prestazioni complementari</a></li>					
				</ul>
			</li>
			
          </ul>
        </li>             
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Organizzatori <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('organizers') ?>">Gestione organizzatori</a></li>
            <li><a href="<?php echo site_url('organizers/create') ?>">Nuovo organizzatore</a></li>
          </ul>
        </li> 
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Location <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('locations') ?>">Gestione location</a></li>
            <li><a href="<?php echo site_url('locations/create') ?>">Nuova location</a></li>
            <li><a href="<?php echo site_url('map_generator') ?>">Generatore mappe</a></li>
          </ul>
        </li> 
        
        
        <!--<li><a href="<?php echo site_url('seasons') ?>">Stagioni</a></li>   -->
        <li><a href="<?php echo site_url('events') ?>">Eventi</a></li>   
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Date <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('dates') ?>">Prossime date</a></li>
            <li><a href="<?php echo site_url('dates/archive') ?>">Date archiviate</a></li>
          </ul>
        </li> 
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Abbonamenti <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo site_url('subscriptions/create') ?>">Nuovo abbonamento</a></li>
            <li><a href="<?php echo site_url('subscriptions') ?>">Prossimi abbonamenti</a></li>
            <li><a href="<?php echo site_url('subscriptions/archive') ?>">Abbonamenti archiviati</a></li>
          </ul>
        </li>               
        <li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
				 aria-expanded="false">Funzioni di Servizio <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				 
				  <li><a href="<?php echo site_url('services/titoliEmessi') ?>">Titoli emessi</a></li>
				   <?php if ($this->session->bo_user->level > 1) : ?>
				  <li class="dropdown-submenu">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Riepiloghi</a>
					  <ul class="dropdown-menu">

						  <li><a href="<?php echo site_url('report/c1_daily') ?>">Report C1 giornaliero</a></li>
						  <li><a href="<?php echo site_url('report/c1') ?>">Report C1 mensile</a></li>
						  <li><a href="<?php echo site_url('report/c2_daily') ?>">Report C2 giornaliero</a></li>
						  <li><a href="<?php echo site_url('report/c2') ?>">Report C2 mensile</a></li>
						  <li><a href="<?php echo site_url('report/xml') ?>">Riepiloghi XML</a></li>
						  <li><a href="<?php echo site_url('report/mail') ?>">Check Riepiloghi SIAE</a></li>	
					  </ul>
				  </li>
				   
				   <li class="dropdown-submenu">
						  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Altri proventi</a>
						  <ul class="dropdown-menu">
							<li><a href="<?php echo site_url('incomes/event') ?>">Altri proventi evento</a></li>
							<li><a href="<?php echo site_url('incomes/organizer') ?>">Altri proventi generici</a></li>
						  </ul>
					</li>  
					<li class="dropdown-submenu">
						   <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
							  aria-haspopup="true" aria-expanded="false">Controllo Accessi</a>
						   <ul class="dropdown-menu">
							<li><a href="<?php echo site_url('caccessi/')?>">Titoli emessi</a></li>
							<li><a href="<?php echo site_url('caccessi/riepilogo_evento') ?>">Riepilogo evento</a></li>
							<!--<li><a href="<?php echo site_url('report/whitelist') ?>">Whitelist</a></li>
							<li><a href="<?php echo site_url('report/blacklist') ?>">Blacklist</a></li>	-->
							<li><a href="<?php echo site_url('report/ca_xml') ?>">Riepiloghi XML</a></li>	
							<li><a href="<?php echo site_url('report/lta') ?>">Esportazione LTA</a></li>
							<li><a href="<?php echo site_url('report/lta_import') ?>">Importazione LTA</a></li>
							<li><a href="<?php echo site_url('report/lta_import_others') ?>">Importazione LTA per conto terzi</a></li>
						  </ul>
					</li>
					<?php endif ?>
					<li class="dropdown-submenu">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Titoli</a>
					  <ul class="dropdown-menu">
						<li><a href="<?php echo site_url('titles/nullify') ?>">Annulla titolo</a></li>
						<li><a href="<?php echo site_url('titles/blacklist') ?>">Inserimento in blacklist</a></li>
						<li><a href="<?php echo site_url('titles/blacklist/remove') ?>">Rimozione da blacklist</a></li>
						<li><a href="<?php echo site_url('titles/suppalt') ?>">Supporto alternativo</a></li>
					  </ul>
					</li>
					<?php if ($this->session->bo_user->level > 1) : ?>
					<li class="dropdown-submenu">
					  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Funzioni speciali</a>
					  <ul class="dropdown-menu">
						<li><a href="#" id="forcelog">Forza LOG giornaliero</a></li>
						<li><a href="#" id="forcelta">Forza LTA giornaliero</a></li>
					  </ul>
					</li>
					<?php endif ?>
					<?php if ($this->session->bo_user->level>1) : ?>
					<li><a href="<?php echo site_url('status') ?>">Stato carte</a></li> 			
					<?php endif ?>					
			  </ul>
		  </li>
		  
	  </ul>
     
      <ul class="nav navbar-nav navbar-right">  
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo $this->session->bo_user->username ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" id="changepwd">Cambio Password</a></li>            
          </ul>
        </li>   
		<li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- modale cambio password -->
<div class="modal fade" tabindex="-1" role="dialog" id="password_modal">
  <div class="modal-dialog" role="document">
	<div class="modal-content">
		<?php 
			$attr = array('id' => 'form_password');
			echo form_open('#', $attr);			
		?>
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Modifica password</h4>
	  </div>
	  <div class="modal-body">		
		  <div class="form-group">
			<label for="old_password">Vecchia password *</label>
			<?php 
				$attr = array(
					'name'			=> 'old_password',
					'class'			=> 'form-control'
				);
				echo form_password($attr);		
			?>			
		  </div>
		  <div class="form-group">
			<label for="new_password">Nuova password *</label>
			<?php 
				$attr = array(
					'name'			=> 'new_password',
					'class'			=> 'form-control'
				);
				echo form_password($attr);		
			?>			
		  </div>
		  <div class="form-group">
			<label for="conf_password">Conferma password *</label>
			<?php 
				$attr = array(
					'name'			=> 'conf_password',
					'class'			=> 'form-control'
				);
				echo form_password($attr);		
			?>			
		  </div>		 
	  </div>
	  <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Annulla</button>
        <button type="button" class="btn btn-primary" id="btn_save_password" data-url="<?= site_url('setpassword') ?>">Salva</button>
      </div>
		<?php echo form_close() ?>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
