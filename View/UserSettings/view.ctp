<div class="userSettings view">
<h2><?php  echo __('User Setting');?></h2>
	<dl>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userSetting['UserSetting']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Setting'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userSetting['DefaultSetting']['name'], array('controller' => 'default_settings', 'action' => 'view', $userSetting['DefaultSetting']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($userSetting['UserSetting']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userSetting['UserSetting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userSetting['UserSetting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Setting'), array('action' => 'edit', $userSetting['UserSetting']['user_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Setting'), array('action' => 'delete', $userSetting['UserSetting']['user_id']), null, __('Are you sure you want to delete # %s?', $userSetting['UserSetting']['user_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Setting'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Default Settings'), array('controller' => 'default_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Setting'), array('controller' => 'default_settings', 'action' => 'add')); ?> </li>
	</ul>
</div>
