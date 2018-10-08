<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">UPDATE THE DETAILS </h3>

  <form id="form-update-service" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataService->id; ?>">
<label>@ Here update status and delivery date</label>
<br />
	 <label>Status</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-tags"></i>
      </span>
      <input type="text" class="form-control" placeholder="Status" name="status" aria-describedby="sizing-addon2" value="<?php echo $dataService->status; ?>" required>
    </div>
	<label>Delivery Date</label>
	<div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="fa fa-calendar"></i>
      </span>
      <input type="text" class="form-control" placeholder="Delivery date" name="deliverydate" aria-describedby="sizing-addon2" value="<?php echo $dataService->deliverydate; ?>" required>
    </div>
	  <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>UPDATE STATUS</button>
      </div>
    </div>
  </form>
</div>