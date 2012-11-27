<div class="usersUserAttributes view">
<h2><?php  echo __('Users User Attribute');?></h2>
	<dl>
		<dt><?php echo __('User Attributes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersUserAttribute['UserAttributes']['name'], array('controller' => 'user_attributes', 'action' => 'view', $usersUserAttribute['UserAttributes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($usersUserAttribute['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersUserAttribute['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($usersUserAttribute['UsersUserAttribute']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usersUserAttribute['UsersUserAttribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usersUserAttribute['UsersUserAttribute']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Users User Attribute'), array('action' => 'edit', $usersUserAttribute['UsersUserAttribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Users User Attribute'), array('action' => 'delete', $usersUserAttribute['UsersUserAttribute']['id']), null, __('Are you sure you want to delete # %s?', $usersUserAttribute['UsersUserAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users User Attributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users User Attribute'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Attributes'), array('controller' => 'user_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Attributes'), array('controller' => 'user_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
