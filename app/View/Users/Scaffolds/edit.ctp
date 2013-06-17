<div class="users form">
<?php
echo $this->Form->create('User');
echo $this->Form->inputs(array( 'id','user_name','passwrd','email_address','first_name','last_name'));
echo $this->Form->end('Edit');
?>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List User',
array('action' => 'index'));?></li>
    </ul>
</div>