<?php
	include 'include/menu.php';
	$st = "Select * from room";
	$roomsinfo = $db->GetData($st);
?>

	
<div class="container-fluid">
	<div class="container">
		<div class="row">
		<?php
			while($roominfo = mysqli_fetch_assoc($roomsinfo))
			{ ?>
			<div class="col-sm-4 col-md-3">
				<a href="viewRoomDetails.php?id=<?=$roominfo['id'] ?>">
					<img src="<?=$roominfo['picture'] ?>" class="img-responsive">					
				</a><br>
				<div class="col-xs-8">
					Location: <?=$roominfo['location'] ?> <br>
					Booking Price $<?=$roominfo['price'] ?>
				</div>
				<div class="col-xs-4">
					<a href="" class="btn btn-success">Book Now</a>
				</div>
			</div> <?php }
			?>			
		</div>
	</div>
</div>

<?php
	include 'include/footer.php';
?>