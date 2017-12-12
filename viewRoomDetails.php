<?php
	include 'include/menu.php';
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	}
	else
	{
		$id = 0;
	}
	$st = "SELECT * from room where id=$id";
	$infos = $db->GetData($st);
	while ($info = mysqli_fetch_assoc($infos)) 
	{
		

?>
<div class="container" style="margin-bottom:40px;">
	<div class="row">
		<div class="col-sm-5">
			<img src="<?=$info['picture'] ?>" class="img-responsive img-thumbnail">
		</div>
		<div class="col-sm-6 pull-right">
			<div>
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#RoomLocation" aria-controls="RoomLocation" role="tab" data-toggle="tab">Room Location</a></li>
				    <li role="presentation"><a href="#RoomSize" aria-controls="RoomSize" role="tab" data-toggle="tab">RoomSize</a></li>
				    <li role="presentation"><a href="#ReservedPriceDetails" aria-controls="ReservedPriceDetails" role="tab" data-toggle="tab">Reserved Price Details</a></li>
				    <li role="presentation"><a href="#RoomDescription" aria-controls="RoomDescription" role="tab" data-toggle="tab">Room Description</a></li>
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="RoomLocation">
				    	<?=$info['location'] ?>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="RoomSize">
				    	<?=$info['size'] ?>		    		
				    </div>
				    <div role="tabpanel" class="tab-pane" id="ReservedPriceDetails">
				    	<?=$info['price'] ?> Tk Per Day
				    </div>
				    <div role="tabpanel" class="tab-pane" id="RoomDescription">
				    	<?=$info['description'] ?>				    	
				    </div>
				  </div>
			</div>
			<div style="margin-top: 30px;">
				<a href="reserveRoom.php?id=<?=$id ?>" type="button" class="btn btn-primary">Reserve Room</a>
			</div>
		</div>
	</div>
</div>
<?php
	}
	include 'include/footer.php';
?>