<?php
  
  foreach ($dataContents as $contents) {
    ?>
    <tr>
      <td style="text-align: center;"><?php echo $contents->id; ?></td>
<td style="min-width:200px; "><?php echo $contents->service_type; ?></td>
<td style="text-align: center;"><?php echo $contents->description; ?></td>
<td style=""><?php echo $contents->required_doc; ?></td>
<td style="text-align: center;"><?php echo $contents->payment; ?></td>

      <td class="text-center" style="min-width:200px;">
          <button class="btn btn-warning update-dataContents" data-id="<?php echo $contents->id; ?>"><i class="glyphicon glyphicon-edit">UPDATE</i></button>
          <button class="btn btn-danger konfirmasiHapus-contents" data-id="<?php echo $contents->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign">DELETE</i></button>
         
      </td>
    </tr>
    <?php
   
  }
?>