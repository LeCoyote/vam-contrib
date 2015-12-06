<?php
    session_start();
    if ($_SESSION["access_email_manager"] ==1)
    {
?>
<div class="configEmails form">
<?php echo $this->Form->create('ConfigEmail'); ?>
	<fieldset>
		<legend><?php echo __('Add Config Email'); ?></legend>
	<?php
		echo $this->Form->input('staff_email');
		echo $this->Form->input('ceo_email');
		echo $this->Form->input('cc_email_1',['label' => 'CC Email']);
		echo $this->Form->textarea('register_text', array('rows' => '5', 'cols' => '5'));
		echo $this->Form->input('inactivate_text');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Config Emails'), array('action' => 'index')); ?></li>
	</ul>
</div>
<?php
    }
    else
    {
        echo '<div class="alert alert-danger"> You do not have access to Email manager module</div>';
    }
?>
