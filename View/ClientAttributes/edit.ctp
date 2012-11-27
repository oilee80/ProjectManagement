<div class="clientAttributes form">
<?php echo $this->Form->create('ClientAttribute');?>
	<fieldset>
		<legend><?php echo __('Edit Client Attribute'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Client');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClientAttribute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ClientAttribute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Client Attributes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
