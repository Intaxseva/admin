<div class="col-md-offset-0 col-md-20 col-md-offset-0 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">UPDATE KYC DETAILS</h3>

  <form id="form-update-userdetails" method="POST">
      <input type="hidden" name="id" value="<?php echo $dataUserdetails->details_id; ?>">  
<table><tr><th>
  <label>User Id</label>	</th>
  <td>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
		<i class="fa fa-bars"></i>
      </span>
	<input type="text" style="background: white"class="form-control" placeholder="User Id" name="userid" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->user_id;?>"required readonly>
      </div></td>
      <th><label>PAN No</label></th>
<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-server"></i>
      </span>
  <input type="text" class="form-control" placeholder="Pan Number" name="pan" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->pan; ?>"required>  
      </div></td></tr>
      <tr><th>
<label>PAN Name</label></th>
<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-user"></i>
      </span>
  <input type="text" class="form-control" placeholder="Pan Name" name="name" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->name;?>" required>  
      </div></td>
<th><label>D.O.B</label></th>
<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-calendar"></i>
      </span>
  <input type="text" class="form-control" placeholder="dd/mm/yyyy" name="dob" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->dob; ?>" required>  
      </div></td></tr>
      <tr><th><label>Address</label></th>
        <td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-book"></i>
      </span>
  <textarea style="width:270%" class="form-control" placeholder="Address" name="address" aria-describedby="sizing-addon2" required><?php echo $dataUserdetails->address; ?></textarea>  
      </div></td></tr>
    <tr><th><label>IFSC Code</label></th><td>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-code"></i>
      </span>
  <input type="text" class="form-control" placeholder="IFSC Code" name="ifsc" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->ifsc; ?>" required>  
      </div></td><th>
<label>Account Number</label></th>
<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-bank"></i>
      </span>
  <input type="text" class="form-control" placeholder="Account Number" name="accnumber" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->accnumber; ?>" required>  
      </div></td></tr>
<tr><th>
<label>Aadhaar Number</label></th>
<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-newspaper-o"></i>
      </span>
  <input type="text" class="form-control" placeholder="Aadhaar number" name="aadhaar" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->aadhaar; ?>" required>  
      </div></td></tr>
      <tr><th> <label>Site Password</label></th>
<td><div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-lock"></i>
      </span>
  <input type="text" class="form-control" placeholder="Portal Password" name="sitepwd" aria-describedby="sizing-addon2" value="<?php echo $dataUserdetails->sitepwd; ?>" required>  
      </div></td></tr></table>
	  <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update KYC</button>
      </div>
    </div>
  </form>
</div>