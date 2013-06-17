<div class="users view">
<h2>Logged User</h2>
    <dl>
        <dt>User Name</dt>
        <dd><?php echo $login['Login']['username']; ?></dd>
        <dt>Password</dt>
        <dd><?php echo $login['Login']['password']; ?>
        </dd>
        <dt>Email Address</dt>
        <dd><?php echo $login['Login']['emailid']; ?></dd>
    </dl>
</div>
<div class="actions">
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link
('Edit User', array('action' => 'edit', $login['Login']['id'])); ?> </li>
        <li><?php echo $this->Html->link
('List Users', array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link
('New User', array('action' => 'login')); ?> </li>
    </ul>
</div>