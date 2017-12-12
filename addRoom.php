<?php
	include 'include/menu.php';
?>
	<div class="container">
		<div class="row">
			<form class="form-horizontal" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<div class="col-xs-3 text-right">Location</div>
					<div class="col-xs-7">
						<input type="text" name="location" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">Size</div>
					<div class="col-xs-7">
						<input type="text" name="size" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">price</div>
					<div class="col-xs-7">
						<input type="text" name="price" class="form-control" required>
					</div>
				</div>				
				<div class="form-group">
					<div class="col-xs-3 text-right">Description</div>
					<div class="col-xs-7">
						<textarea name="description" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right">Picture</div>
					<div class="col-xs-7">
						<input type="file" name="picture">
					</div>
				</div>
				<div class="form-group">
					<div class="col-xs-3 text-right"></div>
					<div class="col-xs-7">
						<input type="submit" name="AddRoomClick" value="Add" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>

<?php
	include 'include/footer.php';
?>