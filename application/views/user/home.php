<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-user"><i class="glyphicon glyphicon-plus-sign"></i>New Client</button>
    </div>
    <div class="col-md-3" style="float:right;">
        <a href="<?php echo base_url('User/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body" style="resize:both;overflow:auto;">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
		  <th style="text-align: center;">S.No</th>
          <th style="text-align: center;">User ID</th>
		  <th style="text-align: center;">Name</th>
		  <th style="text-align: center;">Phone</th>
		  <th style="text-align: center;">Email ID</th>
		  <th style="text-align: center;">User Creation Date</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </thead>
      <tbody id="data-user">
      
      </tbody>
	  <tfoot>
        <tr>
          <th style="text-align: center;">S.No</th>
          <th style="text-align: center;">User ID</th>
		  <th style="text-align: center;">Name</th>
		  <th style="text-align: center;">Phone</th>
		  <th style="text-align: center;">Email ID</th>
		  <th style="text-align: center;">User Creation Date</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<?php echo $modal_tambah_user; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataUser', 'Remove?', 'Yes'); ?>
<?php
  $data['judul'] = 'User';
  $data['url'] = 'User/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>