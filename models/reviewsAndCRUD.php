<?php
	foreach($reviews as $review){
		echo "<div col s12 m12 l12>";
			echo "<div class='col s6 m6 l6'>
				 	<h5>$review[review]</h5>
				  </div>";
			
			if(isset($_SESSION["user"]) && !empty($_SESSION["user"]))
			{
				if($_SESSION["userRole"] == "Admin")
				{
					echo "<div class='col s3 m3 l3'>";
					echo "<form id='deleteForm' action='models/deleteReview.php' method='POST'>
								<br />
								<input type='hidden' name='locationId' value='$locationId'/>
					 			<input type='hidden' name='reviewId' value='$review[reviewId]'/>
								<input type='submit' value='Delete' name='Delete'/>
						  </form>";
					echo "</div>";
					if($_SESSION["userId"] == $review["userId"])
					{
						echo "<div class='col s3 m3 l3'>";
						echo "<form id='editForm' action='editReviewForm.php' method='POST'>
								<br />
					 			<input type='hidden' name='reviewId' value='$review[reviewId]'/>
					 			<input type='hidden' name='review' value='$review[review]'/>
								<input type='submit' value='Edit' name='Edit'/>
						  	   </form>";
						echo "</div>";
					}
				}
				else
				{
					if($_SESSION["userId"] == $review["userId"])
					{
						echo "<div class='col s3 m3 l3'>";
						echo "<form id='editForm' action='editReviewForm.php' method='POST'>
								<br />
					 			<input type='hidden' name='reviewId' value='$review[reviewId]'/>
					 			<input type='hidden' name='review' value='$review[review]'/>
								<input type='submit' value='Edit' name='Edit'/>
						  	   </form>";
						echo "</div>";
						echo "<div class='col s3 m3 l3'>";
						echo "<form id='deleteForm' action='models/deleteReview.php' method='POST'>
									<br />
									<input type='hidden' name='locationId' value='$locationId'/>
						 			<input type='hidden' name='reviewId' value='$review[reviewId]'/>
									<input type='submit' value='Delete' name='Delete'/>
							  </form>";
						echo "</div>";
					}
				}
			}
			echo "<div class='row col s12 m12 l12'>";
			echo "<h7>-";

			require_once "database.php";
			$statements = $db->prepare("SELECT * FROM users WHERE userId = :userId");
			$statements->bindParam(":userId", $review['userId']);
			$statements->execute();

			$user = $statements->fetch();

			echo $user['userName'];
			echo "</h7>";
			echo "</div>";
		echo "</div>";
		
	}
?>