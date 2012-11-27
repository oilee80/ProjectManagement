<div class="projectAttributes form">
<?php echo $this->Form->create('ProjectAttribute');?>
	<fieldset>
		<legend><?php echo __('Edit Project Attribute'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Project');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjectAttribute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjectAttribute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Project Attributes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
