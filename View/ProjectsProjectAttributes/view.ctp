<div class="projectsProjectAttributes view">
<h2><?php  echo __('Projects Project Attribute');?></h2>
	<dl>
		<dt><?php echo __('Project Attributes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectsProjectAttribute['ProjectAttributes']['name'], array('controller' => 'project_attributes', 'action' => 'view', $projectsProjectAttribute['ProjectAttributes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Projects'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectsProjectAttribute['Projects']['name'], array('controller' => 'projects', 'action' => 'view', $projectsProjectAttribute['Projects']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($projectsProjectAttribute['ProjectsProjectAttribute']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projects Project Attribute'), array('action' => 'edit', $projectsProjectAttribute['ProjectsProjectAttribute']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projects Project Attribute'), array('action' => 'delete', $projectsProjectAttribute['ProjectsProjectAttribute']['id']), null, __('Are you sure you want to delete # %s?', $projectsProjectAttribute['ProjectsProjectAttribute']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects Project Attributes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects Project Attribute'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Project Attributes'), array('controller' => 'project_attributes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project Attributes'), array('controller' => 'project_attributes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
