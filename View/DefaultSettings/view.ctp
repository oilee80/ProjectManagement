<div class="defaultSettings view">
<h2><?php  echo __('Default Setting');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($defaultSetting['DefaultSetting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($defaultSetting['DefaultSetting']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Default Setting'), array('action' => 'edit', $defaultSetting['DefaultSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Default Setting'), array('action' => 'delete', $defaultSetting['DefaultSetting']['id']), null, __('Are you sure you want to delete # %s?', $defaultSetting['DefaultSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Default Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
