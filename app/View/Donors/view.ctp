<div class="donors view">
<h2><?php echo __('Donor'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Minecraft Username'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['minecraft_username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($donor['Donor']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Donor'), array('action' => 'edit', $donor['Donor']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Donor'), array('action' => 'delete', $donor['Donor']['id']), array(), __('Are you sure you want to delete # %s?', $donor['Donor']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Donors'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donor'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Donations'), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donation'), array('controller' => 'donations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Donations'); ?></h3>
	<?php if (!empty($donor['Donation'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Donor Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($donor['Donation'] as $donation): ?>
		<tr>
			<td><?php echo $donation['id']; ?></td>
			<td><?php echo $donation['date']; ?></td>
			<td><?php echo $donation['amount']; ?></td>
			<td><?php echo $donation['donor_id']; ?></td>
			<td><?php echo $donation['note']; ?></td>
			<td><?php echo $donation['created']; ?></td>
			<td><?php echo $donation['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'donations', 'action' => 'view', $donation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'donations', 'action' => 'edit', $donation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'donations', 'action' => 'delete', $donation['id']), array(), __('Are you sure you want to delete # %s?', $donation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Donation'), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
