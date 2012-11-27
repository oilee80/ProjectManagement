<div class="projectAttributes view">
<h2><?php  echo __('Project Attribute');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectAttribute['ProjectAttribute']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($projectAttribute['ProjectAttribute']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client Visible'); ?></dt>
		<dd>
			<?php echo h($projectAttribute['ProjectAttribute']['client_visible']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projectAttribute['ProjectAttribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projectAttribute['ProjectAttribute']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project Attribute'), array('action' => 'edit', $projectAttribute['ProjectAttribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project Attribute'), array('action' => 'delete', $projectAttribute['ProjectAttribute']['id']), null, __('Are you sure you want to delete # %s?', $projectAttribute['ProjectAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Attributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Attribute'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Projects');?></h3>
	<?php if (!empty($projectAttribute['Project'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($projectAttribute['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['id'];?></td>
			<td><?php echo $project['name'];?></td>
			<td><?php echo $project['client_id'];?></td>
			<td><?php echo $project['parent_id'];?></td>
			<td><?php echo $project['created'];?></td>
			<td><?php echo $project['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $project['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $project['id']), null, __('Are you sure you want to delete # %s?', $project['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
