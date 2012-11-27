<div class="projectTimes view">
<h2><?php  echo __('Project Time');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectTime['ProjectTime']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($projectTime['ProjectTime']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($projectTime['ProjectTime']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Spent'); ?></dt>
		<dd>
			<?php echo h($projectTime['ProjectTime']['time_spent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectTime['User']['id'], array('controller' => 'users', 'action' => 'view', $projectTime['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectTime['Project']['name'], array('controller' => 'projects', 'action' => 'view', $projectTime['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projectTime['ProjectTime']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projectTime['ProjectTime']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project Time'), array('action' => 'edit', $projectTime['ProjectTime']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project Time'), array('action' => 'delete', $projectTime['ProjectTime']['id']), null, __('Are you sure you want to delete # %s?', $projectTime['ProjectTime']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Times'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Time'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
