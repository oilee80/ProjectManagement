<div class="usersUserAttributes index">
	<h2><?php echo __('Users User Attributes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('user_attributes_id');?></th>
			<th><?php echo $this->Paginator->sort('users_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($usersUserAttributes as $usersUserAttribute): ?>
	<tr>
		<td><?php echo h($usersUserAttribute['UsersUserAttribute']['user_attributes_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usersUserAttribute['Users']['id'], array('controller' => 'users', 'action' => 'view', $usersUserAttribute['Users']['id'])); ?>
		</td>
		<td><?php echo h($usersUserAttribute['UsersUserAttribute']['value']); ?>&nbsp;</td>
		<td><?php echo h($usersUserAttribute['UsersUserAttribute']['created']); ?>&nbsp;</td>
		<td><?php echo h($usersUserAttribute['UsersUserAttribute']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usersUserAttribute['UsersUserAttribute']['user_attributes_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersUserAttribute['UsersUserAttribute']['user_attributes_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersUserAttribute['UsersUserAttribute']['user_attributes_id']), null, __('Are you sure you want to delete # %s?', $usersUserAttribute['UsersUserAttribute']['user_attributes_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Users User Attribute'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
