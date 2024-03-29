<div class="clientsClientAttributes index">
	<h2><?php echo __('Clients Client Attributes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('client_attributes_id');?></th>
			<th><?php echo $this->Paginator->sort('clients_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($clientsClientAttributes as $clientsClientAttribute): ?>
	<tr>
		<td><?php echo h($clientsClientAttribute['ClientsClientAttribute']['client_attributes_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($clientsClientAttribute['Clients']['name'], array('controller' => 'clients', 'action' => 'view', $clientsClientAttribute['Clients']['id'])); ?>
		</td>
		<td><?php echo h($clientsClientAttribute['ClientsClientAttribute']['value']); ?>&nbsp;</td>
		<td><?php echo h($clientsClientAttribute['ClientsClientAttribute']['created']); ?>&nbsp;</td>
		<td><?php echo h($clientsClientAttribute['ClientsClientAttribute']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clientsClientAttribute['ClientsClientAttribute']['client_attributes_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clientsClientAttribute['ClientsClientAttribute']['client_attributes_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clientsClientAttribute['ClientsClientAttribute']['client_attributes_id']), null, __('Are you sure you want to delete # %s?', $clientsClientAttribute['ClientsClientAttribute']['client_attributes_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Clients Client Attribute'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
