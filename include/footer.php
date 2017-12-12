<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<ul>
						<li> <a href="">About Us</a></li>
						<li> <a href="">Contact Us</a></li>
						<li> <a href="">Our Goal</a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul>
						<li> <a href="">Trams & Condition</a></li>
						<li> <a href="">Get Help</a></li>
						<li> <a href="">Our Blog</a></li>

					</ul>
				</div>
				<div class="col-md-4">
					<h4 class="address"><span class="glyphicon glyphicon-home"></span> Address</h4>
					<address>
						Sukrabad, Dhanmondi 32,<br>
						Dhaka Bangladesh.
					</address>
				</div>
			</div>
		</div>
	</footer>

	<div class="modal fade well" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title text-center" id="myModalLabel">Login Here</h4>
			    </div>
			    <form method="post" name="login-portal" class="form-horizontal">
			      <div class="modal-body">
			       	<div class="form-group">
			       		<div class="col-xs-3 text-center">
			       			User Name
			       		</div>
			       		<div class="col-xs-6">
			       			<input type="email" name="useremail" class="form-control" required>
			       		</div>
			       	</div>
			       	<div class="form-group">
			       		<div class="col-xs-3 text-center">
			       			Password
			       		</div>
			       		<div class="col-xs-6">
			       			<input type="password" name="password" class="form-control" required>
			       		</div>
			       	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-defaul pull-left" data-dismiss="modal">Close</button>
			        <button type="submit" name="login-click" class="btn btn-primary">Login</button>
			      </div>
			    </form>
		    </div>
		</div>
	</div>

	<!-- Create Account -->
	<div class="modal fade well" id="createAccount" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			        <h4 class="modal-title text-center" id="myModalLabel">Login Here</h4>
			    </div>
			    <form name="login-portal" method="post" class="form-horizontal">
			      <div class="modal-body">
			      	<div class="form-group">
			       		<div class="col-xs-3 text-right">
			       			Name :
			       		</div>
			       		<div class="col-xs-6">
			       			<input type="text" name="name" class="form-control" required placeholder="Your Name Here">
			       		</div>
			       	</div>
			       	<div class="form-group">
			       		<div class="col-xs-3 text-right">
			       			User Name :
			       		</div>
			       		<div class="col-xs-6">
			       			<input type="email" name="useremail" class="form-control" required placeholder="username@gmail.com">
			       		</div>
			       	</div>
			       	<div class="form-group">
			       		<div class="col-xs-3 text-right">
			       			Password :
			       		</div>
			       		<div class="col-xs-6">
			       			<input type="password" name="password" class="form-control" required placeholder="Password">
			       		</div>
			       	</div>
			       	<div class="form-group">
			       		<div class="col-xs-3 text-right">
			       			Address :
			       		</div>
			       		<div class="col-xs-6">
			       			<input type="text" name="address" class="form-control" required placeholder="Your Address Here">
			       		</div>
			       	</div>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-defaul pull-left" data-dismiss="modal">Close</button>			        
			        <button type="submit" name="create-account-click" class="btn btn-primary">Create Account</button>
			      </div>
			    </form>
		    </div>
		</div>
	</div>


	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>