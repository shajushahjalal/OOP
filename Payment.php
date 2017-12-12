<?php
	include 'include/menu.php';
	$st = "SELECT payment.id,paymentAmount,paymentstatus,name,reserveDate,reservedSchedule,location FROM payment,reserved_room,users,room where payment.usersId = users.id And payment.reservedId = reserved_room.id And room.id = reserved_room.roomId;";
	$result = $db->GetData($st);
?>
<div class="container">
	<div class="row">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Reserved Date</th>
				<th>Reserved Schedule</th>
				<th>Room location</th>
				<th>Total Amount</th>
				<th>Reservation Status</th>
				<th>Action</th>
			</tr>
			<?php 
			while($info = mysqli_fetch_assoc($result))
				{ ?>			
			<tr>
				<td> <?=$info['reserveDate'] ?> </td>
				<td> <?=$info['reservedSchedule'] ?> </td>
				<td> <?=$info['location'] ?> </td>
				<td> <?=$info['paymentAmount'] ?> Tk. </td>
				<td> 
					<?php 
						if($info['paymentstatus'] == 0) 
						{
							echo '<p class="text-danger">Pending</p>';
						}
						else
						{
							echo 'Confirm';
						}
					?>
					
				</td>
				<td>
					<?php 
						if($info['paymentstatus'] == 0) 
						{ ?>
							<a href="?payId= <?=$info['id'] ?>" class="btn btn-primary"> Pay Now</a> <?php
						}
						else
						{
							echo '<p class="text-success">Paid</p>';
						}
					?>
					
				</td>
			</tr> <?php } ?>
		</table>
	</div>
</div>

<?php
	include 'include/footer.php';
?>