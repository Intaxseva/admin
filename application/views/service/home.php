<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-service"><i class="glyphicon glyphicon-plus-sign"></i>New Service Request</button>
    </div>
	</div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
		<th style="text-align:center;">S.No</th>
          <th style="text-align:center;">Request ID</th>
		  <th style="text-align:center;">Service Request</th>
		  <th style="text-align:center;">Payment</th>
		  <th style="text-align:center;">Name</th>
		  <th style="text-align:center;">Status</th>
		  <th style="text-align:center;">Date & Time</th>
		  <th style="text-align:center;">Delivery Date</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </thead>
	  <tfoot>
        <tr>
		<th style="text-align:center;">S.NO</th>
          <th style="text-align:center;">Request ID</th>
		  <th style="text-align:center;">Service Request</th>
		  <th style="text-align:center;">Payment</th>
		  <th style="text-align:center;">Name</th>
		  <th style="text-align:center;">Status</th>
		  <th style="text-align:center;">Date & Time</th>
		  <th style="text-align:center;">Delivery Date</th>


          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </tfoot>
      <tbody id="data-service">
      
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_service; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataService', 'Remove?', 'Yes'); ?>
<?php
  $data['judul'] = 'Service';
  $data['url'] = 'Service/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>