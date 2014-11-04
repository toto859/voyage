<div class="usersInformations form">
<?php echo $this->Form->create('UsersInformation'); ?>
	<fieldset>
		<legend><?php echo __('Edit Users Information'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero_da');
		echo $this->Form->input('pay_id');
		echo $this->Form->input('programme_id');
		echo $this->Form->input('voyage_id');
		echo $this->Form->input('prenom');
		echo $this->Form->input('nom');
		echo $this->Form->input('date_de_naissance');
		echo $this->Form->input('numero_passeport');
		echo $this->Form->input('date_de_delivrance');
		echo $this->Form->input('date_expiration');
		echo $this->Form->input('adresse');
		echo $this->Form->input('ville');
		echo $this->Form->input('code_postal');
		echo $this->Form->input('telephone');
		echo $this->Form->input('cellulaire');
		echo $this->Form->input('courriel');
		echo $this->Form->input('session');
		echo $this->Form->input('cours_espagnol');
		echo $this->Form->input('cours_espagnol_precise');
		echo $this->Form->input('paiement');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersInformation.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('UsersInformation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users Informations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pays'), array('controller' => 'pays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pays'), array('controller' => 'pays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programmes'), array('controller' => 'programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programme'), array('controller' => 'programmes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voyages'), array('controller' => 'voyages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voyage'), array('controller' => 'voyages', 'action' => 'add')); ?> </li>
	</ul>
</div>
