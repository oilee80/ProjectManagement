<div class="clientsClientAttributes view">
<h2><?php  echo __('Clients Client Attribute');?></h2>
	<dl>
		<dt><?php echo __('Client Attributes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsClientAttribute['ClientAttributes']['name'], array('controller' => 'client_attributes', 'action' => 'view', $clientsClientAttribute['ClientAttributes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Clients'); ?></dt>
		<dd>
			<?php echo $this->Html->link($clientsClientAttribute['Clients']['name'], array('controller' => 'clients', 'action' => 'view', $clientsClientAttribute['Clients']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($clientsClientAttribute['ClientsClientAttribute']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($clientsClientAttribute['ClientsClientAttribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($clientsClientAttribute['ClientsClientAttribute']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Clients Client Attribute'), array('action' => 'edit', $clientsClientAttribute['ClientsClientAttribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Clients Client Attribute'), array('action' => 'delete', $clientsClientAttribute['ClientsClientAttribute']['id']), null, __('Are you sure you want to delete # %s?', $clientsClientAttribute['ClientsClientAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients Client Attributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients Client Attribute'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Attributes'), array('controller' => 'client_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Attributes'), array('controller' => 'client_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
