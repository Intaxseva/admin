<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" >
        <button class="form-control btn btn-primary" style="max-width="100px;" data-toggle="modal" data-target="#tambah-payment"><i class="glyphicon glyphicon-plus-sign"></i> New Payment </button>
    </div>
    <div class="col-md-3" style="float:right;">
        <a href="<?php echo base_url('Payment/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <!--<div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-kota"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>-->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align: center;">S.No</th>
		  <th style="min-width:97px; text-align: center;">Transaction ID</th>
		  <th style="text-align: center;"><i class="fa fa-inr"></i></th>
		  <th style="text-align: center;">Mode</th>
		  <th style="text-align: center;">Name</th>
		  <th style="text-align: center;">Service</th>
		  <th style="text-align: center;">Date & Time</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </thead>
      <tbody id="data-payment">
      
      </tbody>
	  <tfoot>
        <tr>
          <th style="text-align: center;">S.No</th>
		  <th style="min-width:97px; text-align: center;">Transaction ID</th>
		  <th style="text-align: center;"><i class="fa fa-inr"></i></th>
		  <th style="text-align: center;">Mode</th>
		  <th style="text-align: center;">Name</th>
		  <th style="text-align: center;">Service</th>
		  <th style="text-align: center;">Date&Time</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<?php echo $modal_tambah_payment; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPayment', 'Remove?', 'Yes'); ?>
<?php
  $data['judul'] = 'Payment';
  $data['url'] = 'Payment/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>