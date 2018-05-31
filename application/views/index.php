<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<p class="lead">TEST INSERIMENTO UTENTE ORIGAMI</p>
		</div>
		<div class="col-xs-6">
			<?php 
				echo form_open(site_url('origami_test/add'));
			?>
			<div class="form-group">
				<label for="username">Username</label>
				<?php 
					$attr = array(
						'name'          => 'username',						
						'class'			=> 'form-control',
						'placeholder'	=> 'Inserisci username'
					);
					echo form_input($attr);					
				?>
			</div>		
			<div class="form-group">
				<label for="password">Password</label>
				<?php 
					$attr = array(
						'name'          => 'password',						
						'class'			=> 'form-control',
						'placeholder'	=> 'Inserisci password'						
					);
					echo form_password($attr);					
				?>
			</div>	
			<div class="form-group">
				<label for="name">Nome completo</label>
				<?php 
					$attr = array(
						'name'          => 'name',						
						'class'			=> 'form-control',
						'placeholder'	=> 'Inserisci nome e cognome'						
					);
					echo form_input($attr);					
				?>
			</div>		
			<?php
				$attr = array(
						'class'			=> 'btn btn-primary',
						'type'          => 'submit',
						'content'		=> '<i class="fa fa-floppy-o" aria-hidden="true"></i> Salva utente'
				);
				echo form_button($attr);
				echo form_close();
			?>
		</div>
	</div>
</div>
