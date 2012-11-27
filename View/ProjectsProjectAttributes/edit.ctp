<div class="projectsProjectAttributes form">
<?php echo $this->Form->create('ProjectsProjectAttribute');?>
	<fieldset>
		<legend><?php echo __('Edit Projects Project Attribute'); ?></legend>
	<?php
		echo $this->Form->input('project_attributes_id');
		echo $this->Form->input('projects_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjectsProjectAttribute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjectsProjectAttribute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects Project Attributes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Project Attributes'), array('controller' => 'project_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Attributes'), array('controller' => 'project_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
