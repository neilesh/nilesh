<h2>Please enter your details</h2>
<?php
echo $this->Form->create('individuals', array('action'=>'register'));
echo $this->Form->input('Username: ');
echo $this->Form->input('Password: ');
echo $this->Form->input('Email Address: ');
echo $this->Form->input('First Name: ');
echo $this->Form->input('Last Name: ');
echo $this->Form->end('Click here to Register');

	?>