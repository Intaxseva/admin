<div class="col-md-offset-1 col-md-10 col-md-offset-1 well" style="width:400px; margin-left:20%;">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update</h3>

  <form id="form-update-payment" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataPayment->id_payment; ?>">
<!--    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
	  <input type="text" class="form-control" placeholder="Nama Kota" name="id" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->id_payment; ?>">  
      <input type="text" class="form-control" placeholder="Nama Kot" name="transaction_id" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->transaction_id; ?>">
      <input type="text" class="form-control" placeholder="Nama Kota" name="payment" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->payment_amount; ?>">
	  <input type="text" class="form-control" placeholder="Nama Kota" name="mode" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->payment_mode; ?>">
	  <input type="text" class="form-control" placeholder="Nama Kota" name="user_id" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->username; ?>">
	  <input type="text" class="form-control" placeholder="Nama Kota" name="service_id" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->service_type; ?>">
	  <input type="text" class="form-control" placeholder="Nama Kota" name="datetime" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->datetime; ?>">
	  
-->
  
  
<label>Transaction ID</label>	
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-random"></i>
      </span>
	<input type="text" class="form-control" placeholder="Transaction ID/Cash ID" name="transaction_id" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->id_transaction; ?>">
      </div>
<label>Payment</label>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-inr" style="width:15px;"></i>
      </span>
  <input type="text" class="form-control" placeholder="Payment" name="payment" aria-describedby="sizing-addon2" value="<?php echo $dataPayment->amount_payment; ?>">  
      </div>

	  <label>Mode Of Payment</label>
<div class="input-group form-group">

      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-credit-card"></i>
      </span>
  <select class="form-control" placeholder="Nama Kota" name="mode" aria-describedby="sizing-addon2" >
  
  <option value="<?php echo $dataPayment->mode_payment; ?>"><?php echo $dataPayment->mode_payment; ?></option>
  <option value="COD">COD(CashOnDelivery)</option>
  <option value="Online">Online</option>
  <option value="NetBanking">NetBanking</option>
  <option value="Cheque">Cheque</option>
  </select>	  
      </div>
	  
	  <div class="form-group">
      <div class="col-md-12" >
          <center><button type="submit"  style="width:100px;" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>Update</button></center>
      </div>
    </div>
  </form>
</div>