<div class="donations form">
<?php echo $this->Form->create('Donation'); ?>
	<fieldset>
		<legend><?php echo __('Add Donation'); ?></legend>
	<?php
		echo $this->Form->input('date');
		echo $this->Form->input('amount');
		echo $this->Form->input('donor_id');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Donations'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Donors'), array('controller' => 'donors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donor'), array('controller' => 'donors', 'action' => 'add')); ?> </li>
	</ul>
</div>
