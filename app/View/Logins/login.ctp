<h2>Please enter your details</h2>
<?php

echo $this->Form->create('Login', array('action'=>'login'));
echo $this->Form->inputs(array('username','password','emailid'));
echo $this->Form->end('Click here to Login');
?>