<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data</h3>

  <form id="form-update-user" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataUser->id; ?>">  
  <label>Name</label>	
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
		<i class="fa fa-user"></i>
      </span>
	<input type="text" class="form-control" placeholder="Name" name="username" aria-describedby="sizing-addon2" value="<?php echo $dataUser->username; ?>" required>
      </div>
<label>Phone</label>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-phone"></i>
      </span>
  <input type="text" class="form-control" placeholder="Phone" name="phone" aria-describedby="sizing-addon2" value="<?php echo $dataUser->phone; ?>" required>  
      </div>
<label>Email ID</label>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-envelope"></i>
      </span>
  <input type="text" class="form-control" placeholder="Email" name="email" aria-describedby="sizing-addon2" value="<?php echo $dataUser->email; ?>" required>  
      </div>
<label>Date-Time</label>
<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
       <i class="fa fa-calendar"></i>
      </span>
  <input style="background:white" type="text" class="form-control" placeholder="Date-Time" name="datetime" aria-describedby="sizing-addon2" value="<?php echo $dataUser->datetime; ?>" readonly>  
      </div>
	  
	  <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>