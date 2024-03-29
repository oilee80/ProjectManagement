<div class="projectsProjectAttributes index">
	<h2><?php echo __('Projects Project Attributes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('project_attributes_id');?></th>
			<th><?php echo $this->Paginator->sort('projects_id');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($projectsProjectAttributes as $projectsProjectAttribute): ?>
	<tr>
		<td><?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['project_attributes_id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($projectsProjectAttribute['Projects']['name'], array('controller' => 'projects', 'action' => 'view', $projectsProjectAttribute['Projects']['id'])); ?>
		</td>
		<td><?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['value']); ?>&nbsp;</td>
		<td><?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['created']); ?>&nbsp;</td>
		<td><?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $projectsProjectAttribute['ProjectsProjectAttribute']['project_attributes_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $projectsProjectAttribute['ProjectsProjectAttribute']['project_attributes_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $projectsProjectAttribute['ProjectsProjectAttribute']['project_attributes_id']), null, __('Are you sure you want to delete # %s?', $projectsProjectAttribute['ProjectsProjectAttribute']['project_attributes_id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Projects Project Attribute'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
