<div class="donations index">
	<h2><?php echo __('Donations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('date'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('donor_id'); ?></th>
			<th><?php echo $this->Paginator->sort('note'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($donations as $donation): ?>
	<tr>
		<td><?php echo h($donation['Donation']['id']); ?>&nbsp;</td>
		<td><?php echo h($donation['Donation']['date']); ?>&nbsp;</td>
		<td><?php echo h($donation['Donation']['amount']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($donation['Donor']['name'], array('controller' => 'donors', 'action' => 'view', $donation['Donor']['id'])); ?>
		</td>
		<td><?php echo h($donation['Donation']['note']); ?>&nbsp;</td>
		<td><?php echo h($donation['Donation']['created']); ?>&nbsp;</td>
		<td><?php echo h($donation['Donation']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $donation['Donation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $donation['Donation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $donation['Donation']['id']), array(), __('Are you sure you want to delete # %s?', $donation['Donation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Donation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Donors'), array('controller' => 'donors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donor'), array('controller' => 'donors', 'action' => 'add')); ?> </li>
	</ul>
</div>
