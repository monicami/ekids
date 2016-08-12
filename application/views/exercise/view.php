<table class="table">
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
<?php foreach ($exercise_items as $exercise):?>	
	<tr>
        <th><?php echo $exercise['e_id'];?></th>
        <th><?php echo $exercise['e_title'];?></th>
		<th><?php echo $exercise['e_subject'];?></th>
		<th><?php echo $exercise['e_content'];?></th>
		<th><?php echo $exercise['e_description'];?></th>
	</tr>
<?php endforeach; ?>
</table>	