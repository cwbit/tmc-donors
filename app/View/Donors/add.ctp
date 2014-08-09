<div class="donors form">
<?php echo $this->Form->create('Donor'); ?>
	<fieldset>
		<legend><?php echo __('Add Donor'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('minecraft_username');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Donors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Donations'), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Donation'), array('controller' => 'donations', 'action' => 'add')); ?> </li>
	</ul>
</div>
