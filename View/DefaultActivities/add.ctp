<div class="defaultActivities form">
<?php echo $this->Form->create('DefaultActivity');?>
	<fieldset>
		<legend><?php echo __('Add Default Activity'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('time');
		echo $this->Form->input('billable');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Default Activities'), array('action' => 'index'));?></li>
	</ul>
</div>
