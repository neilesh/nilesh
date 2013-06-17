<div class="users view">
<h2>User</h2>
    <dl>
        <dt>User Name</dt>
        <dd><?php echo $user['User']['user_name']; ?></dd>
        <dt>Passwrd</dt>
        <dd><?php echo $user['User']['passwrd']; ?></dd>
        <dt>Email Address</dt>
        <dd><?php echo $user['User']['email_address']; ?></dd>
        <dt>First Name</dt>
        <dd><?php echo $user['User']['first_name']; ?></dd>
        <dt>Last Name</dt>
        <dd><?php echo $user['User']['last_name']; ?></dd>
    </dl>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link
('Edit User', array('action' => 'edit', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('Delete User', array('action' => 'delete', $user['User']['id']),
null, sprintf('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('List Users', array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link
('New User', array('action' => 'register')); ?> </li>
    </ul>
</div>