<div class="userSettings index">
	<h2><?php echo __('User Settings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('setting_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($userSettings as $userSetting): ?>
	<tr>
		<td><?php echo h($userSetting['UserSetting']['user_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userSetting['DefaultSetting']['name'], array('controller' => 'default_settings', 'action' => 'view', $userSetting['DefaultSetting']['id'])); ?>
		</td>
		<td><?php echo h($userSetting['UserSetting']['value']); ?>&nbsp;</td>
		<td><?php echo h($userSetting['UserSetting']['created']); ?>&nbsp;</td>
		<td><?php echo h($userSetting['UserSetting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $userSetting['UserSetting']['user_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $userSetting['UserSetting']['user_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $userSetting['UserSetting']['user_id']), null, __('Are you sure you want to delete # %s?', $userSetting['UserSetting']['user_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New User Setting'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Default Settings'), array('controller' => 'default_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Setting'), array('controller' => 'default_settings', 'action' => 'add')); ?> </li>
	</ul>
</div>
