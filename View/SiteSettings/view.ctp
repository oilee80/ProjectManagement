<div class="siteSettings view">
<h2><?php  echo __('Site Setting');?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site Setting'), array('action' => 'edit', $siteSetting['SiteSetting']['name'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Site Setting'), array('action' => 'delete', $siteSetting['SiteSetting']['name']), null, __('Are you sure you want to delete # %s?', $siteSetting['SiteSetting']['name'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
