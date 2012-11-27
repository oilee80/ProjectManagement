<div class="projectActivities view">
<h2><?php  echo __('Project Activity');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default Activity'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectActivity['DefaultActivity']['name'], array('controller' => 'default_activities', 'action' => 'view', $projectActivity['DefaultActivity']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Spent'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['time_spent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectActivity['User']['id'], array('controller' => 'users', 'action' => 'view', $projectActivity['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectActivity['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectActivity['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billable'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['billable']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projectActivity['ProjectActivity']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project Activity'), array('action' => 'edit', $projectActivity['ProjectActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project Activity'), array('action' => 'delete', $projectActivity['ProjectActivity']['id']), null, __('Are you sure you want to delete # %s?', $projectActivity['ProjectActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Activity'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Default Activities'), array('controller' => 'default_activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Activity'), array('controller' => 'default_activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
