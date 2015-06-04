
<h2 style="text-align:center"><span class="gray">Regisration Fee ></span> <span class="gray"> Personal Info  > </span> <span> Confirmation</span> </h2>

<form role="form" class="form-horizontal form_label" method="post">
	<div class="form-group">
		<label class="control-label col-sm-2" for="first_name">Rate:</label>
		<div class="col-sm-6"><?php echo $rates[$values['pay_no']] ?></div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="salutation">Salutation:</label>
		<div class="col-sm-6"><?php echo $salutation[$values['salutation']]." ".$values['first_name']." ".$values['last_name'] ?> 

		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="email">Email:</label>
		<div class="col-sm-6"><?php echo $values['email'] ?></div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="birthdate">Birth Date:</label>
		<div class="col-sm-6"><?php echo $values['birthdate'] ?></div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="contact">Contact No.:</label>
		<div class="col-sm-6"><?php echo $values['contact'] ?></div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2" for="food_diet">Food Diet:</label>
		<div class="col-sm-6"><?php echo $food_diet[$values['food_diet']] ?></div>
	</div>

	<div class="form-group">
		<label class="control-label col-sm-2"></label>
		<div class="col-sm-6">
			<input type="submit" value="Back" name="back" class="btn btn-primary" style="width: 120px">
			<input type="submit" value="Register" name="register_confirm" class="btn btn-primary" style="width: 120px">
		</div>
	</div>

	<input type="hidden" name="pay_no" value="<?php echo $values['pay_no'] ?>">
	<input type="hidden" name="salutation" value="<?php echo $values['salutation'] ?>">
	<input type="hidden" name="first_name" value="<?php echo $values['first_name'] ?>">
	<input type="hidden" name="last_name" value="<?php echo $values['last_name'] ?>">
	<input type="hidden" name="email" value="<?php echo $values['email'] ?>">
	<input type="hidden" name="birthdate" value="<?php echo $values['birthdate'] ?>">
	<input type="hidden" name="contact_no" value="<?php echo $values['contact'] ?>">
	<input type="hidden" name="food_diet" value="<?php echo $values['food_diet'] ?>">

</form>
