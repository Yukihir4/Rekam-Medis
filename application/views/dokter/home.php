<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-4">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-dokter"><i class="glyphicon glyphicon-plus-sign"></i> Add New Data Dokter</button>
    </div>
  </div>
  <!-- /.box-header -->
  
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>ID Dokter</th>
          <th>Nama</th>
          <th>Spesialis</th>
          <th>Alamat</th>
          <th>No Hp</th>
          <th style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody id="data-dokter">
        
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_dokter; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataDokter', 'Delete This Data ?', 'Yes, Delete This Data'); ?>