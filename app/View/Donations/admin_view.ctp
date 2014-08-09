<div class="donations view">
<h2><?php echo __('Donation'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Donor'); ?></dt>
		<dd>
			<?php echo $this->Html->link($donation['Donor']['name'], array('controller' => 'donors', 'action' => 'view', $donation['Donor']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Note'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['note']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($donation['Donation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Donation'), array('action' => 'edit', $donation['Donation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Donation'), array('action' => 'delete', $donation['Donation']['id']), array(), __('Are you sure you want to delete # %s?', $donation['Donation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Donations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Donors'), array('controller' => 'donors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donor'), array('controller' => 'donors', 'action' => 'add')); ?> </li>
	</ul>
</div>
