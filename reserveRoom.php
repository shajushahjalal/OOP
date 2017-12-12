<?php
	include 'include/menu.php';
	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
	    $st = "SELECT * from room where id=$id";
	}
	else
	{
		$st = "SELECT * from room";
		$id= 0;
	}
	$infos = $db->GetData($st);
	
?>
	
	<div class="container">
		<div class="row">
			<form class="form-horizontal" method="post">
				<?php
					if( $id == 0)
					{ ?>
						<div class="form-group">
							<div class="col-xs-3 text-right">
								Select Room
							</div>
							<div class="col-xs-7">
								<select name="roomId" class="form-control" required>
									<option>Select Room</option>
									<?php	
									while ($info = mysqli_fetch_assoc($infos)) 
									{ 
										echo '<option value="'.$info['id'].'"> '.$info['location'].'</option>';
									}
									?>
									
								</select>
							</div>
						</div> <?php 
					}
					else
					{ ?>
						<input type="hidden" name="roomId" value="<?=$id?>">
						<?php
					}
				?>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Select Schedul
					</div>
					<div class="col-xs-7" >						
						<select name="reservedSchedule" class="form-control" required>
							<option>Schedul Time</option>
							<option value="09:00 AM - 11:00 AM"> 09:00 AM - 11:00 AM</option>
							<option value="11:00 AM - 01:00 PM"> 11:00 AM - 01:00 PM</option>
							<option value="01:00 AM - 03:00 PM"> 01:00 AM - 03:00 PM</option>
							<option value="03:00 AM - 05:00 PM"> 03:00 AM - 05:00 PM</option>
							<option value="05:00 AM - 07:00 PM"> 05:00 AM - 07:00 PM</option>
							<option value="07:00 AM - 09:00 PM"> 07:00 AM - 09:00 PM</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						Date
					</div>
					<div class="col-xs-7" >
						<input type="date" name="reserveDate" class="form-control" placeholder="DD/MM/YY">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">
						
					</div>
					<div class="col-xs-7">
						<button type="Submit" name="ReserveClick" class="btn btn-info">Reserve Room</button>
					</div>
				</div>
			</form>
		</div>
	</div>

<?php
	include 'include/footer.php';
?>