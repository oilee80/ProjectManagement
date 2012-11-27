<div class="clientsClientAttributes form">
<?php echo $this->Form->create('ClientsClientAttribute');?>
	<fieldset>
		<legend><?php echo __('Add Clients Client Attribute'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Clients Client Attributes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Client Attributes'), array('controller' => 'client_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Attributes'), array('controller' => 'client_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Clients'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
