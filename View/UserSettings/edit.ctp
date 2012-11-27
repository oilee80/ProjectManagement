<div class="userSettings form">
<?php echo $this->Form->create('UserSetting');?>
	<fieldset>
		<legend><?php echo __('Edit User Setting'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('setting_id');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('UserSetting.user_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('UserSetting.user_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List User Settings'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Default Settings'), array('controller' => 'default_settings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Default Setting'), array('controller' => 'default_settings', 'action' => 'add')); ?> </li>
	</ul>
</div>
