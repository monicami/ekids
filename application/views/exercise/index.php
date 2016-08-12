

<div class=""><li><?php echo $title; ?></li></div>

<?php foreach ($exercise as $row): ?>
<?php //var_dump($exercise_item); die(); ?>

    <?php //echo $row['e_id']; ?>
    <div class="main">
        <?php echo $row['e_level']; ?>
    </div>
	<div>
	    <?php echo $row['g_count']; ?>
	</div>
    <p><a href="<?php echo site_url('exercise/'.$row['e_level']); ?>">exercise details</a></p>

<?php endforeach; ?>
