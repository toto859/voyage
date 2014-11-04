<div class="usersInformations index">
	<h2><?php echo __('Users Informations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_da'); ?></th>
			<th><?php echo $this->Paginator->sort('pay_id'); ?></th>
			<th><?php echo $this->Paginator->sort('programme_id'); ?></th>
			<th><?php echo $this->Paginator->sort('voyage_id'); ?></th>
			<th><?php echo $this->Paginator->sort('prenom'); ?></th>
			<th><?php echo $this->Paginator->sort('nom'); ?></th>
			<th><?php echo $this->Paginator->sort('date_de_naissance'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_passeport'); ?></th>
			<th><?php echo $this->Paginator->sort('date_de_delivrance'); ?></th>
			<th><?php echo $this->Paginator->sort('date_expiration'); ?></th>
			<th><?php echo $this->Paginator->sort('adresse'); ?></th>
			<th><?php echo $this->Paginator->sort('ville'); ?></th>
			<th><?php echo $this->Paginator->sort('code_postal'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('cellulaire'); ?></th>
			<th><?php echo $this->Paginator->sort('courriel'); ?></th>
			<th><?php echo $this->Paginator->sort('session'); ?></th>
			<th><?php echo $this->Paginator->sort('cours_espagnol'); ?></th>
			<th><?php echo $this->Paginator->sort('cours_espagnol_precise'); ?></th>
			<th><?php echo $this->Paginator->sort('paiement'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usersInformations as $usersInformation): ?>
	<tr>
		<td><?php echo h($usersInformation['UsersInformation']['id']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['numero_da']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['pays_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usersInformation['Programme']['id'], array('controller' => 'programmes', 'action' => 'view', $usersInformation['Programme']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersInformation['Voyage']['id'], array('controller' => 'voyages', 'action' => 'view', $usersInformation['Voyage']['id'])); ?>
		</td>
		<td><?php echo h($usersInformation['UsersInformation']['prenom']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['nom']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['date_de_naissance']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['numero_passeport']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['date_de_delivrance']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['date_expiration']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['adresse']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['ville']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['code_postal']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['cellulaire']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['courriel']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['session']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['cours_espagnol']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['cours_espagnol_precise']); ?>&nbsp;</td>
		<td><?php echo h($usersInformation['UsersInformation']['paiement']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usersInformation['UsersInformation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersInformation['UsersInformation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersInformation['UsersInformation']['id']), array(), __('Are you sure you want to delete # %s?', $usersInformation['UsersInformation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Users Information'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pays'), array('controller' => 'pays', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pays'), array('controller' => 'pays', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programmes'), array('controller' => 'programmes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Programme'), array('controller' => 'programmes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Voyages'), array('controller' => 'voyages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voyage'), array('controller' => 'voyages', 'action' => 'add')); ?> </li>
	</ul>
</div>
