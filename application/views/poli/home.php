<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-4">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-poli"><i class="glyphicon glyphicon-plus-sign"></i> Add New Data Poliklinik</button>
    </div>
  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>ID Poliklinik</th>
          <th>Nama</th>
          <th>Gedung</th>
          <th style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody id="data-poli">
        
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_poli; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPoli', 'Delete This Data ?', 'Yes, Delete This Data'); ?>