
<h2 style="text-align:center"><span class="gray">Regisration Fee ></span> <span class="gray"> Personal Info  > </span> <span> Confirmation</span> </h2>

<br>
<h3 style="text-align:center">Processing payment via Paypal ... </h3>
<br>
<br>

<form name="paypal_payment" action="https://www.paypal.com/cgi-bin/webscr" method="post">


<input type="hidden" name="cmd" value="_xclick">

<input type="hidden" name="business" value="philpsych_org@yahoo.com">
<input type="hidden" name="item_name" value="WPA 2016 Registration">
<input type="hidden" name="currency_code" value="PHP">
<input type="hidden" name="amount" value="<?php echo $rates_php[$values['pay_no']] ?>">

<input type="hidden" name="email" value="<?php echo $values['email'] ?>">
<input type="hidden" name="first_name" value="<?php echo $values['first_name'] ?>">
<input type="hidden" name="last_name" value="<?php echo $values['last_name'] ?>">

<input type="hidden" name="cancel_return" value="<?php echo base_url(); ?>registration">
<input type="hidden" name="return" value="<?php echo base_url(); ?>register_complete">

<input type="hidden" name="item_number" value="<?php echo $values['reg_no'] ?>">
<input type="hidden" name="invoice" value="<?php echo $values['reg_no'] ?>">

</form>

<script type="text/javascript">
	window.onload = function(){
  document.forms['paypal_payment'].submit()
}
</script>
