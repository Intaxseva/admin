<?php
	$no=1;
  foreach ($dataService as $service) {
    ?>
    <tr>
       <td align="center"><?php echo $no; ?></td>
     <td align="center"><?php echo $service->id; ?></td>	   
      <td ><?php echo $service->service_type; ?></td>
      <td align="center"><?php echo $service->payment_amount; ?></td>	  
	  <td align="center"><?php echo $service->username; ?></td>
	  <td align="center"><?php echo $service->status; ?></td>
	  <td><?php echo $service->datetime; ?></td>
	  <td align="center"><?php echo $service->deliverydate; ?></td>

      <td class="text-center" style="min-width:150px;">
          <button class="btn btn-warning update-dataService" data-id="<?php echo $service->id; ?>"><i class="glyphicon glyphicon-pencil">UPDATE</i></button>
		   </td>
    </tr>
    <?php
   $no++;
  }

?>