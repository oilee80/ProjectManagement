<div class="siteSettings index">
	<h2><?php echo __('Site Settings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($siteSettings as $siteSetting): ?>
	<tr>
		<td><?php echo h($siteSetting['SiteSetting']['name']); ?>&nbsp;</td>
		<td><?php echo h($siteSetting['SiteSetting']['description']); ?>&nbsp;</td>
		<td><?php echo h($siteSetting['SiteSetting']['value']); ?>&nbsp;</td>
		<td><?php echo h($siteSetting['SiteSetting']['created']); ?>&nbsp;</td>
		<td><?php echo h($siteSetting['SiteSetting']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $siteSetting['SiteSetting']['name'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $siteSetting['SiteSetting']['name'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $siteSetting['SiteSetting']['name']), null, __('Are you sure you want to delete # %s?', $siteSetting['SiteSetting']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Site Setting'), array('action' => 'add')); ?></li>
	</ul>
</div>
