<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-userdetails"><i class="glyphicon glyphicon-plus-sign"></i>Users KYC details</button>
    </div>
    <div class="col-md-3" style="float:right;">
        <a href="<?php echo base_url('Userdetails/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
		  <th style="text-align: center;">S.No</th>
       <th style="text-align: center;font-size: 6">User ID</th>
		  <th style="text-align: center;">PAN No</th>
		  <th style="text-align: center;">Name</th>
		  <th style="text-align: center;">D.O.B</th>
		  <th style="text-align: center;">Address</th>  
      <th style="text-align: center;">IFSC</th>
  <th style="text-align: center;">Acc No</th>
    <th style="text-align: center;">Aadhaar</th>
      <th style="text-align: center;">SitePwd</th>
          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </thead>
      <tbody id="data-userdetails">
      
      </tbody>
	  <tfoot>
        <tr>
           <th style="text-align: center;">S.No</th>
            <th style="text-align: center;">User ID</th>
      <th style="text-align: center;">PAN No</th>
      <th style="text-align: center;">Name</th>
      <th style="text-align: center;">D.O.B</th>
      <th style="text-align: center;">Address</th>  
      <th style="text-align: center;">IFSC</th>
  <th style="text-align: center;">Acc No</th>
    <th style="text-align: center;">Aadhaar</th>
      <th style="text-align: center;">SitePwd</th>

          <th style="text-align: center;" style="min-width:150px;">Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>

<?php echo $modal_tambah_userdetails; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataUserdetails', 'Remove?', 'Yes'); ?>
<?php
  $data['judul'] = 'Userdetails';
  $data['url'] = 'Userdetails/import';
  echo show_my_modal('modals/modal_import', 'import-kota', $data);
?>