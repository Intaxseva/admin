<div class="col-md-12 well">
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;"><i class="fa fa-location-arrow"></i> Details Of Payment (ID: <b><?php
            $i=0;
			foreach ($dataPayment as $payment) {
if($i==0) 
{                     
			 ?>
			  <?php echo $payment->id_user; ?>
			 
              <?php
	 $i=1;
}        
		}
          ?></b>)</h3>

  <div class="box box-body">
      <table id="tabel-detail" class="table table-bordered table-striped">
        <thead>
          <tr>
		    <th class="text-center">Payment ID</th>
			<th class="text-center">Name</th>
            <th class="text-center">Payment</th>
            <th class="text-center">Transaction_ID</th>
            <th class="text-center">Payment_Mode</th>
            <th class="text-center">Service Req</th>
			<th class="text-center">Date & Time</th>
          </tr>
        </thead>
        <tbody id="data-payment">
          <?php
            foreach ($dataPayment as $payment) {
              ?>
              <tr>
                <td class="text-center" style="min-width:100px;"><?php echo $payment->id_payment; ?></td>
				<td class="text-center" style="min-width:100px;"><?php echo $payment->username_user; ?></td>
                <td class="text-center" style="min-width:100px;"><i class="fa fa-inr"></i> <?php echo $payment->amount_payment; ?></td>
				<td class="text-center" style="min-width:100px;"><?php echo $payment->id_transaction; ?></td>
				<td class="text-center" style="min-width:100px;"><?php echo $payment->mode_payment; ?></td>
				<td class="text-center" style="min-width:100px;"><?php echo $payment->id_service; ?></td>				
				<td class="text-center" style="min-width:100px;"><?php echo $payment->date_time_payment; ?></td>
				
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