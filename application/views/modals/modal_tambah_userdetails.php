<div class="col-md-offset-0 col-md-20 col-md-offset-0 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">USERS KYC DETAILS</h3>
  <form id="form-tambah-userdetails" method="POST">
    <table cellpadding="10" cellspacing="10">
      <tr><th><label>User Mobile</label></th>
  <td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-phone"></i>
      </span>
      <select class="form-control" placeholder="" name="user_id" aria-describedby="sizing-addon2" required>
    <?php 
    $con=mysql_connect("localhost","root","");
    $db=mysql_select_db("intaxseva",$con);
    $get=mysql_query("select * from user");?>
        <option value="">Select the registred mobilenumber</option>
    <?php
    while($row=mysql_fetch_assoc($get)){
    ?>
    <option value="<?php echo($row['id'])?>"><?php echo($row['phone'])?></option>
    <?php } ?>
    </select>
    </div></td>
  <th><label>PAN NO</label></th>
	<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-server"></i>
      </span>
      <input type="text" class="form-control" placeholder="Pan Number" name="pan" aria-describedby="sizing-addon2" required />
    </div></td></tr>
    <tr><th>	<label>Name</label></th>
      <td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Name" name="name" aria-describedby="sizing-addon2" required />
    </div></td>
    <th><label>D.O.B</label></th>
      <td>	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-calendar"></i>
      </span>
      <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="dob" aria-describedby="sizing-addon2" required />
    </div></td></tr>
    <tr>
      <th>
	<label>Address</label></th>
  <td colspan="3">
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-book"></i>
      </span>
      <textarea style="width: 270%;" class="form-control" placeholder="Address" name="address" aria-describedby="sizing-addon2" required /></textarea>
    </div></td></tr>
    <tr><th>
	<label>IFSC Code</label></th>
  <td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-code"></i>
      </span>
      <input type="text" class="form-control" placeholder="IFSC Code" name="ifsc" aria-describedby="sizing-addon2" required />
    </div></td><th>
  <label>Account Number</label></th>
  <td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-bank"></i>
      </span>
      <input type="text" class="form-control" placeholder="Account Number" name="accnumber" aria-describedby="sizing-addon2" required />
    </div></td></tr>
    <tr><th>
  <label>Aadhaar Number</label></th>
  <td>
  <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-newspaper-o"></i>
      </span>
      <input type="text" class="form-control" placeholder="Aadhaar Number" name="aadhaar" aria-describedby="sizing-addon2" required />
         </div></td></tr>
         <tr>
         <th>
  <label>Site Password</label></th><td>
  <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-lock"></i>
      </span>
      <input type="text" class="form-control" placeholder="portal Password" name="sitepwd" aria-describedby="sizing-addon2" required />
    </div>
  </td></tr></table>

    <div class="form-group">
      <div class="col-md-12">
<center>          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>Submit KYC</button></center>
      </div>
    </div>
  </form>
  <?php ?>
</div>