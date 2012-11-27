<div class="clients form">
<?php echo $this->Form->create('Client');?>
	<fieldset>
		<legend><?php echo __('Add Client'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('support_time_per_month', array('timeFormat' => 24, 'interval' => 15, 'default' => '00:00:00'));
		echo $this->Form->input('ClientAttribute');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Clients'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Client Attributes'), array('controller' => 'client_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client Attribute'), array('controller' => 'client_attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
