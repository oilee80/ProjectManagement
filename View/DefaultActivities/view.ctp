<div class="defaultActivities view">
<h2><?php  echo __('Default Activity');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($defaultActivity['DefaultActivity']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($defaultActivity['DefaultActivity']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($defaultActivity['DefaultActivity']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billable'); ?></dt>
		<dd>
			<?php echo h($defaultActivity['DefaultActivity']['billable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Default Activity'), array('action' => 'edit', $defaultActivity['DefaultActivity']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Default Activity'), array('action' => 'delete', $defaultActivity['DefaultActivity']['id']), null, __('Are you sure you want to delete # %s?', $defaultActivity['DefaultActivity']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Default Activities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Activity'), array('action' => 'add')); ?> </li>
	</ul>
</div>
