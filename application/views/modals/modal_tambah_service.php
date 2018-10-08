<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button align="right" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"> NEW SERVICE REQUEST</h3>

  <form id="form-tambah-service" method="POST">
  
  <label>USER ID</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-phone-square"></i>
      </span>
	  <select name="user_id"  class="form-control" aria-describedby="sizing-addon2" required>
	    <?php 
	  $con=mysql_connect("localhost","root","");
	  $db=mysql_select_db("intaxseva",$con);
	  $get=mysql_query("select * from user");?>
	  <option value="">Select the user id</option>
	  <?php
	  while($row=mysql_fetch_assoc($get)){
	  ?>
	  <option value="<?php echo($row['id'])?>"><?php echo($row['id'])?></option>
	 
	  <?php 
	  }
	  ?>   </select>
         </div>
	  <label>SERVICE REQUEST</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-server"></i>
      </span>
	  <select name="service_id"  class="form-control" aria-describedby="sizing-addon2" required>
	   <?php 
	  $con=mysql_connect("localhost","root","");
	  $db=mysql_select_db("intaxseva",$con);
	  $get=mysql_query("select * from content where id!='0'");?>
	  <option value="">Select the service</option>
	  <?php
	  while($row=mysql_fetch_assoc($get)){
	  ?>
	  <option value="<?php echo($row['id'])?>"><?php echo($row['service_type'])?></option>
	 
	  <?php 
	  }
	  ?>   </select>
	      </div>
	 
		 <label>PAYMENT AMOUNT</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-money"></i>
      </span>
      <input type="text" class="form-control" placeholder="payment Amount" name="payment_amount" aria-describedby="sizing-addon2" required>
    </div>
<label>STATUS</label>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-tags"></i>
      </span>
      <input type="text" class="form-control" placeholder="status" name="status" aria-describedby="sizing-addon2" required>
    </div>
	<label>DATE & TIME</label> 
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-calendar"></i>
      </span>
      <input style="background:white" type="text" class="form-control" placeholder="Date & Time" name="datetime" aria-describedby="sizing-addon2" value="<?php $date = date_default_timezone_set('Asia/Kolkata'); echo $today = date("d-m-Y H:i:s");?>" readonly>
	  <input type="hidden" class="form-control" placeholder="status" name="duration" aria-describedby="sizing-addon2" value="<?php echo $du=date('d/m/Y', strtotime("+15 days")); ?>" >
	</div>
  <div class="form-group">
      <div class="col-md-12">
<center>          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>NEW SERVICE_REQUEST</button></center>
      </div>
	</div>
  </form>
</div>