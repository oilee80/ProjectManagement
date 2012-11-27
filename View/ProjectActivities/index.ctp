<div class="projectActivities index">
	<h2><?php echo __('Project Activities');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('activity_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('time_spent');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('billable');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($projectActivities as $projectActivity): ?>
	<tr>
		<td><?php echo h($projectActivity['ProjectActivity']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectActivity['DefaultActivity']['name'], array('controller' => 'default_activities', 'action' => 'view', $projectActivity['DefaultActivity']['id'])); ?>
		</td>
		<td><?php echo h($projectActivity['ProjectActivity']['title']); ?>&nbsp;</td>
		<td><?php echo h($projectActivity['ProjectActivity']['description']); ?>&nbsp;</td>
		<td><?php echo h($projectActivity['ProjectActivity']['time_spent']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectActivity['User']['id'], array('controller' => 'users', 'action' => 'view', $projectActivity['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($projectActivity['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectActivity['Project']['id'])); ?>
		</td>
		<td><?php echo h($projectActivity['ProjectActivity']['billable']); ?>&nbsp;</td>
		<td><?php echo h($projectActivity['ProjectActivity']['created']); ?>&nbsp;</td>
		<td><?php echo h($projectActivity['ProjectActivity']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projectActivity['ProjectActivity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projectActivity['ProjectActivity']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projectActivity['ProjectActivity']['id']), null, __('Are you sure you want to delete # %s?', $projectActivity['ProjectActivity']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Project Activity'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Default Activities'), array('controller' => 'default_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Activity'), array('controller' => 'default_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
