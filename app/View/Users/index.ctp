<div class="movies index">
    <h2>Users</h2>
    <table cellpadding="0" cellspacing="0">
        <tr>

            <th>User Name</th>
            <th>Passwrd</th>
            <th>Email Address</th>
            <th>First Name</th>
            <th>Last Name</th>

            <th class="actions">Actions</th>
        </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['user_name']; ?></td>
        <td><?php echo $user['User']['passwrd']; ?></td>
        <td><?php echo $user['User']['email_address']; ?></td>
        <td><?php echo $user['User']['first_name']; ?></td>
        <td><?php echo $user['User']['last_name']; ?></td>
        <td class="actions">

            <?php echo $this->Html->link('View',
array('action' => 'view', $user['User']['id'])); ?>
            <?php echo $this->Html->link('Edit',
array('action' => 'edit', $user['User']['id'])); ?>
            <?php echo $this->Html->link('Delete',
array('action' => 'delete', $user['User']['id']),
null, sprintf('Are you sure you want to delete %s?', $user['User']['user_name'])); ?>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</div>
<div class="actions">
     <a href="index/view"></a><h3>Admin Panel</h3>
    <h3>Actions</h3>
    <ul>
        <li><?php echo $this->Html->link('New User', array('action' => 'register')); ?></li>
    </ul>
</div>
