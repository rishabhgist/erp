<?php include 'includes/db.php'; ?>
<?php 

	$query = "SELECT id,likes, post_title FROM post ORDER BY likes DESC LIMIT 3";
	$result = mysqli_query($con,$query);




 ?>
<div class="col-md-2">
		<h5>Trending Questions</h5>
		<ul style="list-style-type: none;">
			<?php while ($row = mysqli_fetch_assoc($result)) {
				$post_title = $row['post_title'];
				$id = $row['id'];

			?>

			<li><a href="qna.php?post_id=<?php echo $id ?>"><?php echo "$post_title"; ?></a></li>
			<?php } ?>
		</ul>
		</div>
	</div>