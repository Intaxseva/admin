<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> DETAILS OF SERVICE_REQUSET <b><?php
            $i=0;
			foreach ($dataService as $service) {
if($i==0) 
{                     
			 ?>
			 (User ID:
			  <?php echo $service->user_phone; ?>)
			  <?php echo $service->username; ?>
			 
              <?php
	 $i=1;
}        
		}
          ?></b> </h3>

  <div class="box box-body">
      <table id="tabel-detail" class="table table-bordered table-striped">
        <thead>
          <tr>
		    <th>Service Req_ID</th>
			<th>UserName</th>
            <th>Mobile Number</th>
            <th>Service_id</th>
            <th>Payment_Amount</th>
            <th>Service_status</th>
			<th>Service_Req Date & Time</th>
          </tr>
        </thead>
		 <tfoot>
          <tr>
		    <th>Service Req_ID</th>
			<th>UserName</th>
            <th>Mobile Number</th>
            <th>Service_id</th>
            <th>Payment_Amount</th>
            <th>Service_status</th>
			<th>Service_Req Date & Time</th>
          </tr>
        </tfoot>
        <tbody id="data-service">
          <?php
            foreach ($dataService as $service) {
              ?>
              <tr>
                <td style="min-width:100px;"><?php echo $service->id; ?></td>
				<td style="min-width:100px;"><?php echo $service->username; ?></td>
	<td style="min-width:100px;"><?php echo $service->user_phone; ?></td>

               	<td style="min-width:100px;"><?php echo $service->service_id; ?></td>
				<td style="min-width:100px;"><?php echo $service->payment_amount; ?></td>
				<td style="min-width:100px;"><?php echo $service->status; ?></td>				
				<td style="min-width:100px;"><?php echo $service->datetime; ?></td>
				
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>
  </div>

  <div class="text-right">
    <button class="btn btn-danger" data-dismiss="modal"> Close</button>
  </div>
</div>