<h2 style="text-align:center"><span class="gray">Regisration Fee ></span> <span> Personal Info </span> > <span class="gray"> Confirmation</span> </h2>

<form role="form" class="form-horizontal" method="post">

	<div style="text-align:center; color:red;">
		<?php echo validation_errors(); ?>
	</div>

	<table class="reg-table">
		<tr>
			<td>Registration Fee</td>
			<td><?php echo ($this->input->post('pay')) ? $rates[$this->input->post('pay')] : $rates[$this->input->post('pay_no')] ; ?></td>
		</tr>

		<tr>
			<td>Salutation</td>
			<td>
				<select name="salutation" id="salutation" class="form-control" required>
					<?php foreach ($salutation as $k => $v) echo '<option value="'.$k.'"> '.$v.' </option>'; ?>
				</select>				
			</td>
		</tr>

		<tr>
			<td>First Name</td>
			<td><input type="text" name="first_name" class="form-control" value="<?php echo $this->input->post('first_name') ?>" placeholder="Enter First Name" required></td>
		</tr>

		<tr>
			<td>Last Name</td>
			<td><input type="text" name="last_name" class="form-control" value="<?php echo $this->input->post('last_name') ?>" placeholder="Enter Last Name" required></td>
		</tr>

		<tr>
			<td>Email</td>
			<td><input type="email" name="email" class="form-control" value="<?php echo $this->input->post('email'); ?>" placeholder="Enter Email" required></td>
		</tr>

		<tr>
			<td>Birth Date</td>
			<td><input type="date" name="birthdate" id="birthdate" value="<?php echo $this->input->post('birthdate') ?>" class="form-control" placeholder="mm/dd/yyyy" required></td>
		</tr>

		<tr>
			<td>Contact No.</td>
			<td><input type="tel" name="contact_no" class="form-control" value="<?php echo $this->input->post('contact_no') ?>" placeholder="Enter Contact No." required></td>
		</tr>

		<tr>
			<td>Address</td>
			<td><input type="text" name="address" class="form-control" value="<?php echo $this->input->post('address') ?>" placeholder="Enter Address" required></td>
		</tr>

		<tr>
			<td>Food Diet</td>
			<td>
				<select name="food_diet" class="form-control" id="food-diet" required>
					<?php foreach ($food_diet as $k => $v) echo '<option value="'.$k.'"> '.$v.' </option>'; ?>
				</select>
			</td>
		</tr>

	</table>

	<div style="text-align:center; margin:20px 0;">
		<a href="" type="submit" value="Back" name="back" class="btn btn-primary" style="width: 120px; margin-right:20px;">Back</a>
		<input type="submit" value="Confirm" name="user-data" class="btn btn-primary"  style="width: 120px">
	</div>	

	<input type="hidden" name="pay_no" value="<?php echo ($this->input->post('pay')) ? ($this->input->post('pay')) : ($this->input->post('pay_no')); ?>">
	
</form>


<script>
document.getElementById('salutation').value = "<?php echo $this->input->post('salutation'); ?>";
document.getElementById('food-diet').value = "<?php echo $this->input->post('food_diet'); ?>";
</script>
