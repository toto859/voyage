<div class="voyages view">
<h2><?php echo __('Voyage'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($voyage['Voyage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Voyage'); ?></dt>
		<dd>
			<?php echo h($voyage['Voyage']['voyage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Depart'); ?></dt>
		<dd>
			<?php echo h($voyage['Voyage']['date_depart']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Retour'); ?></dt>
		<dd>
			<?php echo h($voyage['Voyage']['date_retour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Prix'); ?></dt>
		<dd>
			<?php echo h($voyage['Voyage']['prix']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Voyage'), array('action' => 'edit', $voyage['Voyage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Voyage'), array('action' => 'delete', $voyage['Voyage']['id']), array(), __('Are you sure you want to delete # %s?', $voyage['Voyage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Voyages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Voyage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users Informations'), array('controller' => 'users_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users Information'), array('controller' => 'users_informations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Users Informations'); ?></h3>
	<?php if (!empty($voyage['UsersInformation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero Da'); ?></th>
		<th><?php echo __('Pay Id'); ?></th>
		<th><?php echo __('Programme Id'); ?></th>
		<th><?php echo __('Voyage Id'); ?></th>
		<th><?php echo __('Prenom'); ?></th>
		<th><?php echo __('Nom'); ?></th>
		<th><?php echo __('Date De Naissance'); ?></th>
		<th><?php echo __('Numero Passeport'); ?></th>
		<th><?php echo __('Date De Delivrance'); ?></th>
		<th><?php echo __('Date Expiration'); ?></th>
		<th><?php echo __('Adresse'); ?></th>
		<th><?php echo __('Ville'); ?></th>
		<th><?php echo __('Code Postal'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Cellulaire'); ?></th>
		<th><?php echo __('Courriel'); ?></th>
		<th><?php echo __('Session'); ?></th>
		<th><?php echo __('Cours Espagnol'); ?></th>
		<th><?php echo __('Cours Espagnol Precise'); ?></th>
		<th><?php echo __('Paiement'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($voyage['UsersInformation'] as $usersInformation): ?>
		<tr>
			<td><?php echo $usersInformation['id']; ?></td>
			<td><?php echo $usersInformation['numero_da']; ?></td>
			<td><?php echo $usersInformation['pays_id']; ?></td>
			<td><?php echo $usersInformation['programme_id']; ?></td>
			<td><?php echo $usersInformation['voyage_id']; ?></td>
			<td><?php echo $usersInformation['prenom']; ?></td>
			<td><?php echo $usersInformation['nom']; ?></td>
			<td><?php echo $usersInformation['date_de_naissance']; ?></td>
			<td><?php echo $usersInformation['numero_passeport']; ?></td>
			<td><?php echo $usersInformation['date_de_delivrance']; ?></td>
			<td><?php echo $usersInformation['date_expiration']; ?></td>
			<td><?php echo $usersInformation['adresse']; ?></td>
			<td><?php echo $usersInformation['ville']; ?></td>
			<td><?php echo $usersInformation['code_postal']; ?></td>
			<td><?php echo $usersInformation['telephone']; ?></td>
			<td><?php echo $usersInformation['cellulaire']; ?></td>
			<td><?php echo $usersInformation['courriel']; ?></td>
			<td><?php echo $usersInformation['session']; ?></td>
			<td><?php echo $usersInformation['cours_espagnol']; ?></td>
			<td><?php echo $usersInformation['cours_espagnol_precise']; ?></td>
			<td><?php echo $usersInformation['paiement']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users_informations', 'action' => 'view', $usersInformation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users_informations', 'action' => 'edit', $usersInformation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users_informations', 'action' => 'delete', $usersInformation['id']), array(), __('Are you sure you want to delete # %s?', $usersInformation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Users Information'), array('controller' => 'users_informations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
