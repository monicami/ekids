

<li><?php echo $title; ?></li>

<?php foreach ($users as $users_item): ?>

    <h3><?php echo $users_item['u_id']; ?></h3>
    <div class="main">
        <?php echo $users_item['u_name']; ?>
    </div>
    <p><a href="<?php echo site_url('users/'.$users_item['u_type']); ?>">User type</a></p>

<?php endforeach; ?>
