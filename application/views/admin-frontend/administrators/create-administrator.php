<div class="col-xs-6">
	<?php if($this->session->flashdata('errors')) : ?>
		<div class="alert alert-danger"><?php echo $this->session->flashdata('errors'); ?></div>
	<?php endif; ?>	

	<?php if(isset($upload_errors)) : ?>
		<div class="alert alert-danger">
		<?php
		foreach ($upload_errors as $error) {
			echo $error.'<br />';
		}
		?>
		</div>
	<?php endif; ?>	

	<?php $attributes = array(
		'id'    => 'add_administrator_form',
		'class' => 'form-horizontal'
	); 
	?>
	<?php echo form_open_multipart('administrators/add', $attributes); ?>
		<div class="form-group">
			<?php 
			$data = array(
				'class' => 'col-xs-4 control-label',
				);
			echo form_label('Prénom', 'Prénom', $data);
			?>
			<div class="col-xs-8">
				<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'first_name',
					'placeholder' => 'Tapez votre prénom'
					);

				echo form_input($data);
				?>
			</div>
		</div>



		<div class="form-group">
			<?php 
			$data = array(
				'class' => 'col-xs-4 control-label',
				);
			echo form_label('Nom', 'Nom', $data);
			?>
			<div class="col-xs-8">
				<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'last_name',
					'placeholder' => 'Tapez votre nom'
					);

				echo form_input($data);
				?>
			</div>
		</div>


		<div class="form-group">
			<?php 
			$data = array(
				'class' => 'col-xs-4 control-label',
				);
			echo form_label('Courriel', 'Courriel', $data);
			?>
			<div class="col-xs-8">
				<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'email',
					'type' => 'email',
					'placeholder' => 'Tapez votre courriel'
					);

				echo form_input($data);
				?>
			</div>
		</div>


		<div class="form-group">
			<?php 
			$data = array(
				'class' => 'col-xs-4 control-label',
				);
			echo form_label('Nom d\'utilisateur', 'username', $data);
			?>
			<div class="col-xs-8">
				<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'username',
					'placeholder' => 'Tapez votre nom d\'utilisateur'
					);

				echo form_input($data);
				?>
			</div>
		</div>



		<div class="form-group">
			<?php 
			$data = array(
				'class' => 'col-xs-4 control-label',
				);
			echo form_label('Mot de passe', 'password', $data);
			?>
			<div class="col-xs-8">
				<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'password',
					'placeholder' => 'Tapez votre Mot de passe'
					);

				echo form_input($data);
				?>
			</div>
		</div>


		<div class="form-group">
			<?php 
			$data = array(
				'class' => 'col-xs-4 control-label',
				);
			echo form_label('Confirmer le mot de passe', 'confirm_password', $data);
			?>
			<div class="col-xs-8">
				<?php
				$data = array(
					'class' => 'form-control',
					'name' => 'confirm_password',
					'placeholder' => 'Retapez le mot de passe'
					);

				echo form_input($data);
				?>
			</div>
		</div>

		<div class="form-group">
            <label class="control-label col-lg-4">Définir une image</label>
            <div class="">
                <div data-provides="fileupload" class="fileupload fileupload-new">
                    <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                    	<img alt="" src="<?php echo base_url(); ?>assets/img/demoUpload.jpg">
                    </div>
                    <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                    <div>
                        <span class="btn btn-file btn-primary">
                        	<span class="fileupload-new">Sélectionner une image</span>
                        	<span class="fileupload-exists">Changer</span>
                        	<input type="file" name="upload-photo">
                        </span>
                        <a data-dismiss="fileupload" class="btn btn-danger fileupload-exists" href="#">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>


		<div class="form-group">
			
			<?php
			$data = array(
				'class' => 'btn btn-primary',
				'name' => 'submit',
				'value' => 'Ajouter'
				);

			echo form_submit($data);
			?>

		</div>
	<?php echo form_close(); ?>
</div>