<div class="signup-form">
    <form method="post" id="myForm">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-user"></i></span>
				<input type="text" class="form-control" name="username" placeholder="Username" required="required">
			</div>
        </div>
        <div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				<input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon"><i class="fa fa-lock"></i></span>
				<input type="password" minlength="6" class="form-control" name="password" placeholder="Password" id="password" required="required">
			</div>
        </div>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">
					<i class="fa fa-lock"></i>
					<i class="fa fa-check"></i>
				</span>
				<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required="required">
			</div>
        </div>
        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg">Sign Up</button>
        </div>
		<p>Already have an account? <a href="Login.php">Login here</a>.</p>
    </form>

	<?php	
		if (isset($_POST['submit'])) {
			$conn = mysqli_connect('localhost', 'root', '', 'jordan') or die("Connection failed: " . mysqli_connect_error());
			$username = $_POST['username'];
			$email = $_POST['email'];
			$pass = $_POST['password'];

			$sql = "insert into int301(username, email, password) values('$username', '$email', '$pass')";
			if (mysqli_query($conn, $sql)) {
				echo '<script language="javascript">';
				echo 'alert("Successfully Registered"); location.href="index.php"';
				echo '</script>';
			} else {
				$_SESSION['message'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
		}
	 ?>
</div>