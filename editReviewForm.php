<?php
	include "views/header.php";
	$reviewId = trim(filter_input(INPUT_POST, 'reviewId', FILTER_SANITIZE_STRING));
	$review = trim(filter_input(INPUT_POST, 'review', FILTER_SANITIZE_STRING));
?>
	<div class="container">
		<div class="row center col s12 m12 l12">
			<h4>Edit Review</h4>
		</div>
		<form method="POST" action="models/editReview.php">
			<input type="hidden" name="reviewId" value="<?php echo $reviewId ?>" />
			Review:
			<input type="text" name="review" value="<?php echo $review ?>" />
			<div class="row center col s12 m12 l12">
				<input type="submit" />
			</div>
		</form>

	</div>
<?php
	include "views/footer.php";
?>