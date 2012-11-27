<div class="projectActivities form">
<?php echo $this->Form->create('ProjectActivity');?>
	<fieldset>
		<legend><?php echo __('Edit Project Activity'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('activity_id');
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('time_spent');
		echo $this->Form->input('user_id');
		echo $this->Form->input('project_id');
		echo $this->Form->input('billable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ProjectActivity.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ProjectActivity.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Project Activities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Default Activities'), array('controller' => 'default_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Activity'), array('controller' => 'default_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
