<?php
	include "views/header.php";
	require "models/database.php";

	$destinations = $db->prepare('SELECT * FROM locations');

	$destinations->execute();
?>
<h1 class="white-text center" style="padding-top:105px;position:absolute;z-index:200;width:100%;">Meissa Bayo Vacation 
<br>Spots Review Site</h1>
<div>
	<img style="margin:0px;" id="bannerIMG" src="images/banner.jpg">
</div>
<div class="container">
	<div class="row center">
		<div class="col s12 m12 l12">
			<h3>Vacation Spots</h3>
			<h6>Destinations and reviews for your upcoming vacation.</h6>
			<h6>Click on the black plus to see the destination page.</h6>
		</div>
	</div>
	<div class="row">
		<?php foreach($destinations as $destination) : ?>
		    <div class="col s12 m6 l6">
		      <div class="card">
		        <div class="card-image">
		          <img id="card_image"class="image" src="<?php echo $destination['locationPic'];?>">
		          <span class="card-title"><?php echo $destination['location']?></span>
		          <form action="vacationSpots.php" method="POST">
		          	<input type="hidden" name="locationId" value="<?php echo $destination['locationId']?>"/>
		          	<button type="submit" class="btn-floating halfway-fab waves-effect waves-light black"><i class="material-icons">add</i></button>
		      	  </form>
		        </div>
		      </div>
		    </div>
	    <?php endforeach ?>
	</div>
</div>
<button class="black" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
<?php
	include "views/footer.php"
?>