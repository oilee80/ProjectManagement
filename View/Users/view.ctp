<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['user_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Times'), array('controller' => 'project_times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Time'), array('controller' => 'project_times', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Settings'), array('controller' => 'user_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Setting'), array('controller' => 'user_settings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Attributes'), array('controller' => 'user_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Attribute'), array('controller' => 'user_attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Project Times');?></h3>
	<?php if (!empty($user['ProjectTime'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Time Spent'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['ProjectTime'] as $projectTime): ?>
		<tr>
			<td><?php echo $projectTime['id'];?></td>
			<td><?php echo $projectTime['title'];?></td>
			<td><?php echo $projectTime['description'];?></td>
			<td><?php echo $projectTime['time_spent'];?></td>
			<td><?php echo $projectTime['user_id'];?></td>
			<td><?php echo $projectTime['project_id'];?></td>
			<td><?php echo $projectTime['created'];?></td>
			<td><?php echo $projectTime['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_times', 'action' => 'view', $projectTime['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_times', 'action' => 'edit', $projectTime['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_times', 'action' => 'delete', $projectTime['id']), null, __('Are you sure you want to delete # %s?', $projectTime['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Time'), array('controller' => 'project_times', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Settings');?></h3>
	<?php if (!empty($user['UserSetting'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Setting Id'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserSetting'] as $userSetting): ?>
		<tr>
			<td><?php echo $userSetting['user_id'];?></td>
			<td><?php echo $userSetting['setting_id'];?></td>
			<td><?php echo $userSetting['value'];?></td>
			<td><?php echo $userSetting['created'];?></td>
			<td><?php echo $userSetting['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_settings', 'action' => 'view', $userSetting['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_settings', 'action' => 'edit', $userSetting['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_settings', 'action' => 'delete', $userSetting['id']), null, __('Are you sure you want to delete # %s?', $userSetting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Setting'), array('controller' => 'user_settings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related User Attributes');?></h3>
	<?php if (!empty($user['UserAttribute'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['UserAttribute'] as $userAttribute): ?>
		<tr>
			<td><?php echo $userAttribute['id'];?></td>
			<td><?php echo $userAttribute['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_attributes', 'action' => 'view', $userAttribute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_attributes', 'action' => 'edit', $userAttribute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_attributes', 'action' => 'delete', $userAttribute['id']), null, __('Are you sure you want to delete # %s?', $userAttribute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Attribute'), array('controller' => 'user_attributes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
