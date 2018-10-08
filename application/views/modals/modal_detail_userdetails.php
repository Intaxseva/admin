<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> Details Of User (User ID: <b><?php
            $i=0;
			foreach ($dataUser as $user) {
if($i==0) 
{                     
			 ?>
			  <?php echo $user->id; ?>
			 
              <?php
	 $i=1;
}        
		}
          ?></b>)<?php echo $user->username; ?></h3>

  <div class="box box-body">
      <table id="tabel-detail" class="table table-bordered table-striped">
        <thead>
          <tr>
			<th class="text-center">Service Req ID</th>
			<th class="text-center">Service Request</th>
            <th class="text-center">Amount</th>
            <th class="text-center">Status</th>
            <th class="text-center">Request Date</th>
			<th class="text-center">Devlivery Date</th>
          </tr>
        </thead>
        <tbody id="data-user">
          <?php
            foreach ($dataUser as $user) {
              ?>
              <tr>
				<td class="text-center"><?php echo $user->service_id; ?></td>
				<td class="text-center"><?php echo $user->service_type; ?></td>
                <td class="text-center"><?php echo $user->payment_amount; ?></td>
				<td class="text-center"><?php echo $user->status; ?></td>
				<td class="text-center"><?php echo $user->datetime; ?></td>
				<td class="text-center"><?php echo $user->deliverydate; ?></td>
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