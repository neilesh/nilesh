<h2>Please enter your details</h2>
<?php

echo $this->Form->create('User', array('action'=>'register'));
echo $this->Form->inputs(array('user_name','password','email_address','first_name','last_name'));
echo $this->Form->end('Click here to Register');
?>