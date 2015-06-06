
<h2 style="text-align:center"><span class="gray">Regisration Fee ></span> <span class="gray"> Personal Info  > </span> <span> Confirmation</span> </h2>

<form role="form" class="form-horizontal form_label" method="post">

	<table class="reg-table">
		<tr>
			<td>Registration Fee</td>
			<td><?php echo ($this->input->post('pay')) ? $rates[$this->input->post('pay')] : $rates[$this->input->post('pay_no')] ; ?></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><?php echo $salutation[$values['salutation']]." ".$values['first_name']." ".$values['last_name'] ?> </td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $values['email'] ?></td>
		</tr>
		<tr>
			<td>Birth Date</td>
			<td><?php echo $values['birthdate'] ?></td>
		</tr>
		<tr>
			<td>Contact No.</td>
			<td><?php echo $values['contact'] ?></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><?php echo $values['address'] ?></td>
		</tr>
		<tr>
			<td>Food Diet</td>
			<td><?php echo $food_diet[$values['food_diet']] ?></td>
		</tr>
	</table>

	<div style="text-align:center; margin:20px 0;">
		<input type="submit" value="Back" name="back" class="btn btn-primary" style="width: 120px; margin-right:20px;">
		<input type="submit" value="Register" name="register_confirm" class="btn btn-primary" style="width: 120px">
	</div>

	<input type="hidden" name="pay_no" value="<?php echo $values['pay_no'] ?>">
	<input type="hidden" name="salutation" value="<?php echo $values['salutation'] ?>">
	<input type="hidden" name="first_name" value="<?php echo $values['first_name'] ?>">
	<input type="hidden" name="last_name" value="<?php echo $values['last_name'] ?>">
	<input type="hidden" name="email" value="<?php echo $values['email'] ?>">
	<input type="hidden" name="birthdate" value="<?php echo $values['birthdate'] ?>">
	<input type="hidden" name="contact_no" value="<?php echo $values['contact'] ?>">
	<input type="hidden" name="food_diet" value="<?php echo $values['food_diet'] ?>">
	<input type="hidden" name="address" value="<?php echo $values['address'] ?>">

</form>
