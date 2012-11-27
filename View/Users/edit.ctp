<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_name');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
		echo $this->Form->input('UserAttribute');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Activities'), array('controller' => 'project_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Activity'), array('controller' => 'project_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Settings'), array('controller' => 'user_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Setting'), array('controller' => 'user_settings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Attributes'), array('controller' => 'user_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Attribute'), array('controller' => 'user_attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
