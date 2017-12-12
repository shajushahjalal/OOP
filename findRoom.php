<?php
	include 'include/menu.php';
	$st = "Select * from room";
	$roomsinfo = $db->GetData($st);
?>
	<div class="container">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form class="form-horizontal" name="findRoom" method="post" action="viewresult.php" target="_blank">
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Select Room
					</div>
					<div class="col-xs-7">
						<select name="room" class="form-control" required>
							<option>Select Room</option>
							<option value="First Floor 1001"> First Floor 1001</option>
							<option value="First Floor 1002"> First Floor 1002</option>
							<option value="First Floor 1003"> First Floor 1003</option>
							<option value="First Floor 1004"> First Floor 1004</option>
							<option value="First Floor 1005"> First Floor 1005</option>
							<option value="First Floor 1006"> First Floor 1006</option>
							<option value="First Floor 1007"> First Floor 1007</option>
						</select>
					</div>
				</div>				
				<div class="form-group">
					<div class="col-xs-3 text-right">
						
					</div>
					<div class="col-xs-7">
						<button type="Submit" name="search-room" class="btn btn-info">Free Schedule</button>
					</div>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
<?php
	include 'include/footer.php';
?>