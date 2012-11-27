<div class="clientsClientAttributes form">
<?php echo $this->Form->create('ClientsClientAttribute');?>
	<fieldset>
		<legend><?php echo __('Edit Clients Client Attribute'); ?></legend>
	<?php
		echo $this->Form->input('client_attributes_id');
		echo $this->Form->input('clients_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientsClientAttribute.client_attributes_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClientsClientAttribute.client_attributes_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Clients Client Attributes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
