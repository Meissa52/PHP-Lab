<?php
	include "views/header.php";
	require "models/database.php";
	$locationId = trim(filter_input(INPUT_POST, 'locationId', FILTER_SANITIZE_STRING));
	require "models/getVacationSpot.php";
	require "models/getReviews.php";

	if(isset($_SESSION))
	{
		$display = "inline";
		//$userId = $_SESSION['userId'];
	}
	else
	{
		$display = "none";
		//$userId = 0;
	}
?>
<br />
<div class="container">
	<div class="row center col s12 m12 l12">
		<img id="vacationPic" class="images" src="<?php echo $location['locationPic']?>">
		<h3 class="centered"><?php echo $location['location']?></h3>
	</div>
	<hr>
	<div class="row center">
		<h4>Reviews</h4>
	</div>
	<div class="row col s12 m12 l12">
		<?php require "models/reviewsAndCRUD.php"; ?>
	</div>
	<hr>
	<?php
	if(isset($_SESSION["user"]) && !empty($_SESSION["user"]))
	{
		echo ("
		<div class='row center col s12 m12 l12'>
			<h4>Add Review</h4>
		</div>
		<div class='row col s12 m12 l12'>
			<form method='POST' action='models/addReview.php'>
				Review:
				<input type='hidden' value='$locationId' name='locationId' />
				<input type='hidden' value='$_SESSION[userId]' name='userId' />
				<input type='text' name='review'/>
				<div class='row center'>
					<input type='submit' />
				</div>
			</form>
		</div>
		");
	}
	?>
</div>
<button class="black" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<?php
	include "views/footer.php"
?>