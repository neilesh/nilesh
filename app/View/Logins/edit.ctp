<div class="users form">
<?php
echo $this->Form->create('User');
echo $this->Form->inputs(array('id','username','password','emailid'));
echo $this->Form->end('Edit');
?>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('List User',
array('action' => 'view'));?></li>
    </ul>
</div>