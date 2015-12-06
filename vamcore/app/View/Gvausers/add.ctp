<?php
    session_start();
    if ($_SESSION["access_pilot_manager"] ==1)
    {
?>
<div class="gvausers form">
<?php echo $this->Form->create('Gvauser'); ?>
	<fieldset>
		<legend><?php echo __('Add Gvauser'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('surname');
		echo $this->Form->input('callsign');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('user_type_id');
		echo $this->Form->input('register_date');
		echo $this->Form->input('last_visit_date');
		echo $this->Form->input('activation');
		echo $this->Form->input('ivaovid');
		echo $this->Form->input('hub');
		echo $this->Form->input('location');
		echo $this->Form->input('country');
		echo $this->Form->input('city');
		echo $this->Form->input('ivao_hours');
		echo $this->Form->input('gva_hours');
		echo $this->Form->input('route_id');
		echo $this->Form->input('book_date');
		echo $this->Form->input('category');
		echo $this->Form->input('money');
		echo $this->Form->input('reg_comments');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('Fleettype');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Pilots'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Jumps'), array('controller' => 'jumps', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jump'), array('controller' => 'jumps', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pirepfsfks'), array('controller' => 'pirepfsfks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pirepfsfk'), array('controller' => 'pirepfsfks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reports'), array('controller' => 'reports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Report'), array('controller' => 'reports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reserves'), array('controller' => 'reserves', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserf'), array('controller' => 'reserves', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stafftrackers'), array('controller' => 'stafftrackers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stafftracker'), array('controller' => 'stafftrackers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vaprofits'), array('controller' => 'vaprofits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vaprofit'), array('controller' => 'vaprofits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fleet Type'), array('controller' => 'fleettypes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fleet Type'), array('controller' => 'fleettypes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<?php
    }
    else
    {
        echo '<div class="alert alert-danger"> You do not have access to Pilots module</div>';
    }
?>
