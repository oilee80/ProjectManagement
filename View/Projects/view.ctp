<div class="projects view">
<h2><?php  echo __('Project');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($project['Project']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Client'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Client']['name'], array('controller' => 'clients', 'action' => 'view', $project['Client']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['ParentProject']['name'], array('controller' => 'projects', 'action' => 'view', $project['ParentProject']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($project['Project']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($project['Project']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Activities'), array('controller' => 'project_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Activity'), array('controller' => 'project_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Attributes'), array('controller' => 'project_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Attribute'), array('controller' => 'project_attributes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments');?></h3>
	<?php if (!empty($project['Comment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Parent Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id'];?></td>
			<td><?php echo $comment['project_id'];?></td>
			<td><?php echo $comment['title'];?></td>
			<td><?php echo $comment['body'];?></td>
			<td><?php echo $comment['parent_comment'];?></td>
			<td><?php echo $comment['created'];?></td>
			<td><?php echo $comment['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Project Activities');?></h3>
	<?php if (!empty($project['ProjectActivity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Activity Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Time Spent'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Billable'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['ProjectActivity'] as $projectActivity): ?>
		<tr>
			<td><?php echo $projectActivity['id'];?></td>
			<td><?php echo $projectActivity['activity_id'];?></td>
			<td><?php echo $projectActivity['title'];?></td>
			<td><?php echo $projectActivity['description'];?></td>
			<td><?php echo $projectActivity['time_spent'];?></td>
			<td><?php echo $projectActivity['user_id'];?></td>
			<td><?php echo $projectActivity['project_id'];?></td>
			<td><?php echo $projectActivity['billable'];?></td>
			<td><?php echo $projectActivity['created'];?></td>
			<td><?php echo $projectActivity['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_activities', 'action' => 'view', $projectActivity['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_activities', 'action' => 'edit', $projectActivity['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_activities', 'action' => 'delete', $projectActivity['id']), null, __('Are you sure you want to delete # %s?', $projectActivity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Activity'), array('controller' => 'project_activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Projects');?></h3>
	<?php if (!empty($project['ChildProject'])):?>
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
		foreach ($project['ChildProject'] as $childProject): ?>
		<tr>
			<td><?php echo $childProject['id'];?></td>
			<td><?php echo $childProject['name'];?></td>
			<td><?php echo $childProject['client_id'];?></td>
			<td><?php echo $childProject['parent_id'];?></td>
			<td><?php echo $childProject['created'];?></td>
			<td><?php echo $childProject['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'projects', 'action' => 'view', $childProject['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'projects', 'action' => 'edit', $childProject['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'projects', 'action' => 'delete', $childProject['id']), null, __('Are you sure you want to delete # %s?', $childProject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Project'), array('controller' => 'projects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Project Attributes');?></h3>
	<?php if (!empty($project['ProjectAttribute'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Client Visible'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['ProjectAttribute'] as $projectAttribute): ?>
		<tr>
			<td><?php echo $projectAttribute['id'];?></td>
			<td><?php echo $projectAttribute['name'];?></td>
			<td><?php echo $projectAttribute['client_visible'];?></td>
			<td><?php echo $projectAttribute['created'];?></td>
			<td><?php echo $projectAttribute['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'project_attributes', 'action' => 'view', $projectAttribute['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'project_attributes', 'action' => 'edit', $projectAttribute['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'project_attributes', 'action' => 'delete', $projectAttribute['id']), null, __('Are you sure you want to delete # %s?', $projectAttribute['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Project Attribute'), array('controller' => 'project_attributes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
