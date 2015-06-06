


<form role="form" class="form-horizontal form_label" method="post">
	<table class="reg-table">
		<tr>
			<td colspan=2>
				<?php 
					echo validation_errors(); 
					if(isset($error)) {
						echo $error;
					}
				?>
			</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="name" class="form-control" value="<?php echo (isset($name)) ? $name : ''; ?>" placeholder="Enter Username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" class="form-control" value="<?php echo (isset($password)) ? $password : ''; ?>" placeholder="Enter Password"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="cpassword" class="form-control" value="<?php echo (isset($cpassword)) ? $cpassword : ''; ?>" placeholder="Enter Confirm Password"></td>
		</tr>
	</table>

	<div style="text-align:center; margin:20px 0;">
		<input type="submit" value="Register" class="btn btn-primary" style="width: 120px; margin-right:20px;">
		<a href="<?php echo $this->config->config['base_url']."users/lists"; ?>" class='btn btn-primary'>Go Back</a>
	</div>
</form>
