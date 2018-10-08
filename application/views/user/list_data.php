<?php
  $no = 1;
  foreach ($dataUser as $user) {
    ?>
    <tr>
	  <td class="text-center"><?php echo $no; ?></td>
      <td class="text-center"><?php echo $user->id; ?></td>
      <td class="text-center"><?php echo $user->username; ?></td>
      <td class="text-center"><?php echo $user->phone; ?></td>	  
	  <td ><?php echo $user->email; ?></td>
	  <td class="text-center"><?php echo $user->datetime; ?></td>

      <td class="text-center" style="min-width:150px;">
          <button class="btn btn-warning update-dataUser" data-id="<?php echo $user->id; ?>"><i class="glyphicon glyphicon-repeat"></i></button>
          <button class="btn btn-danger konfirmasiHapus-user" data-id="<?php echo $user->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i></button>
          <button class="btn btn-info detail-dataUser" data-id="<?php echo $user->id; ?>"><i class="glyphicon glyphicon-info-sign"></i> </button>
      </td>
    </tr>
    <?php
   $no++;
  }
?>