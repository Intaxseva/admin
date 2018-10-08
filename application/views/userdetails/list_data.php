<?php
  $no = 1;
  foreach ($dataUserdetails as $userdetails) {
    ?>
    <tr >
	  <td class="text-center"><?php echo $no; ?></td>
      <td class="text-center"><?php echo $userdetails->user_id; ?></td>
      <td class="text-center"><?php echo $userdetails->pan; ?></td>
      <td class="text-center"><?php echo $userdetails->name; ?></td>	  
	  <td ><?php echo $userdetails->dob;?></td>
	  <td style="" class="text-center"><?php echo $userdetails->address; ?></td>
    <td ><?php echo $userdetails->ifsc;?></td>
    <td ><?php echo $userdetails->accnumber;?></td>
    <td ><?php echo $userdetails->aadhaar;?></td>
    <td ><?php echo $userdetails->sitepwd;?></td>

      <td class="text-center" style="min-width:150px;">
          <button class="btn btn-warning update-dataUserdetails" data-id="<?php echo $userdetails->details_id; ?>"><i class="glyphicon glyphicon-repeat"></i></button>
          <button class="btn btn-danger konfirmasiHapus-userdetails" data-id="<?php echo $userdetails->details_id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i></button>
          </td>
    </tr>
    <?php
   $no++;
  }
?>