<div class="usersUserAttributes form">
<?php echo $this->Form->create('UsersUserAttribute');?>
	<fieldset>
		<legend><?php echo __('Edit Users User Attribute'); ?></legend>
	<?php
		echo $this->Form->input('user_attributes_id');
		echo $this->Form->input('users_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UsersUserAttribute.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UsersUserAttribute.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users User Attributes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List User Attributes'), array('controller' => 'user_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Attributes'), array('controller' => 'user_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
