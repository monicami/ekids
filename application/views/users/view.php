
<!--<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Subject</th>
        <th>Content</th>
		<th>Description</th>
    </tr>
    </thead>
	<tbody>
	<tr>
        <th><?php echo $exercise_item['e_id'];?></th>
        <th><?php echo $exercise_item['e_title'];?></th>
		<th><?php echo $exercise_item['e_subject'];?></th>
		<th><?php echo $exercise_item['e_content'];?></th>
		<th><?php echo $exercise_item['e_description'];?></th>
	</tr>
</table>-->
<?php foreach ($exercise_item as $row): ?>
<?php //var_dump($exercise_item); die(); ?>

    <?php //echo $row['e_id']; ?>
    <div class="main">
        <?php echo $row['e_id']; ?>
    </div>
	<div>
	    <?php echo $row['e_title']; ?>
	</div>

<?php endforeach; ?>
