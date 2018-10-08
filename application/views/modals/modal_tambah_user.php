<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">New Client</h3>
  <form id="form-tambah-user" method="POST">
  <label>Name</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Name" name="username" aria-describedby="sizing-addon2" required />
    </div>
	<label>Phone</label>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-phone"></i>
      </span>
      <input type="text" class="form-control" placeholder="Phone" name="phone" aria-describedby="sizing-addon2" required />
    </div>
	<label>Email</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-envelope"></i>
      </span>
      <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2" required />
    </div>
	<label>Service Request</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-server"></i>
      </span>
      <select class="form-control" placeholder="Service_Req" name="service_id" aria-describedby="sizing-addon2" required>
	  <?php 
	  $con=mysql_connect("localhost","root","");
	  $db=mysql_select_db("intaxseva",$con);
	  $get=mysql_query("select * from content where id!='0'");?>
	  <option value="">Select the service</option>
	  <?php
	  while($row=mysql_fetch_assoc($get)){
	  ?>
	  <option value="<?php echo($row['id'])?>"><?php echo($row['service_type'])?></option>
	  <?php } ?>
	  </select>
    </div>
	<label>Payment Amount</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-money"></i>
      </span>
      <input type="text" class="form-control" placeholder="Payment Amount" name="payment_amount" aria-describedby="sizing-addon2" required />
    </div>
	<label>Date-Time</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-calendar"></i>
      </span>
      <input style="background:white" type="text" class="form-control" placeholder="Date & Time" name="datetime" aria-describedby="sizing-addon2" 
	  value="<?php $date = date_default_timezone_set('Asia/Kolkata'); echo $today = date("d-m-Y H:i:s"); ?>" readonly />
	  <input type="hidden" class="form-control" name="duration" aria-describedby="sizing-addon2" value="<?php echo $du=date('d/m/Y', strtotime("+15 days")); ?>" >
    </div>
    <div class="form-group">
      <div class="col-md-12">
<center>          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>Save</button></center>
      </div>
    </div>
  </form>
  <?php ?>
</div>