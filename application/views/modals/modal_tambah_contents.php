<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center; text_style:bold">Add New Services </h3>

  <form id="form-tambah-contents" method="POST">
    <div class="input-group form-group">
      <input type="hidden" class="form-control" placeholder="Service ID" name="transaction_id" aria-describedby="sizing-addon2" required>
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-th-list"></i>
      </span>
      <input type="text" class="form-control" placeholder="Service Type" name="payment" aria-describedby="sizing-addon2" required>
    </div>
	<!--<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-file"></i>
      </span>
      <input type="text" class="form-control" placeholder="Description" name="des" aria-describedby="sizing-addon2" required>
    </div>-->
	
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-file"></i>
      </span>
	<textarea class="form-control" name="des" aria-describedby="sizing-addon2"  placeholder="Description" cols="2" required></textarea>
	</div>
	
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-book"></i>
      </span>
      <input type="text" class="form-control" placeholder="Required Document" name="req" aria-describedby="sizing-addon2" required>
    </div>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-inr"></i>
      </span>
      <input type="text" class="form-control" placeholder="Payment" name="paymentamount" aria-describedby="sizing-addon2" required>
    </div>
	
    <div class="form-group">
      <div class="col-md-12">
          <center><button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-send"></i>Add New Services</button></center>
      </div>
    </div>
  </form>
</div>