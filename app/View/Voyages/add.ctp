<div class="voyages form">
<?php echo $this->Form->create('Voyage'); ?>
	<fieldset>
		<legend><?php echo __('Add Voyage'); ?></legend>
	<?php
		echo $this->Form->input('voyage');
		echo $this->Form->input('date_depart');
		echo $this->Form->input('date_retour');
		echo $this->Form->input('prix');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Voyages'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users Informations'), array('controller' => 'users_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Information'), array('controller' => 'users_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
