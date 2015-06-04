<h2 style="text-align:center"><span class="gray">Regisration Fee ></span> <span> Personal Info </span> > <span class="gray"> Confirmation</span> </h2>

<form role="form" class="form-horizontal" method="post">

	<div class="form-group">
		<label class="control-label col-sm-2" for="first_name"></label>
		<div class="col-sm-10" style="color:red;">
			<?php echo validation_errors(); ?>
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="first_name">Registration Fee</label>
		<div class="col-sm-6"><?php echo ($this->input->post('pay')) ? $rates[$this->input->post('pay')] : $rates[$this->input->post('pay_no')] ; ?> </div>
	</div>

	<input type="hidden" name="pay_no" value="<?php echo ($this->input->post('pay')) ? ($this->input->post('pay')) : ($this->input->post('pay_no')); ?>">
	<div class="form-group">
		<label class="control-label col-sm-2" for="salutation">Salutation:</label>
		<div class="col-sm-6">
			<select name="salutation" id="salutation" class="form-control" required>
				<?php foreach ($salutation as $k => $v) echo '<option value="'.$k.'"> '.$v.' </option>'; ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="first_name">First Name:</label>
		<div class="col-sm-6">
			<input type="text" name="first_name" class="form-control" value="<?php echo $this->input->post('first_name') ?>" placeholder="Enter First Name" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="last_name">Last Name:</label>
		<div class="col-sm-6">
			<input type="text" name="last_name" class="form-control" value="<?php echo $this->input->post('last_name') ?>" placeholder="Enter Last Name" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Email:</label>
		<div class="col-sm-6">
			<input type="text" name="email" class="form-control" value="<?php echo $this->input->post('email'); ?>" placeholder="Enter Email" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="birthdate">Birth Date:</label>
		<div class="col-sm-6">
			<input type="date" name="birthdate" id="birthdate" value="<?php echo $this->input->post('birthdate') ?>" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="contact">Contact No.:</label>
		<div class="col-sm-6">
			<input type="text" name="contact_no" class="form-control" value="<?php echo $this->input->post('contact_no') ?>" placeholder="Enter Contact No.">
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2" for="food_diet">Food Diet:</label>
		<div class="col-sm-6">
			<select name="food_diet" class="form-control" id="food-diet" required>
				<?php foreach ($food_diet as $k => $v) echo '<option value="'.$k.'"> '.$v.' </option>'; ?>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="control-label col-sm-2"></label>
		<div class="col-sm-6">
			<a href="" type="submit" value="Back" name="back" class="btn btn-primary" style="width: 120px">Back</a>
			<input type="submit" value="Confirm" name="user-data" class="btn btn-primary"  style="width: 120px">
		</div>
	</div>
</form>


<script>
document.getElementById('salutation').value = "<?php echo $this->input->post('salutation'); ?>";
document.getElementById('food-diet').value = "<?php echo $this->input->post('food_diet'); ?>";
</script>
