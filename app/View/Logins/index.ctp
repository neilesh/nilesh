<html>
<head>
	<body>
<h2>Logged USERS</h2>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link
('Edit User', array('action' => 'edit',$login['Login']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('List Users', array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link
('New User', array('action' => 'login')); ?> </li>
    </ul>
</div>
</body>	
</head>
</html>