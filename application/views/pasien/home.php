<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-4">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pasien"><i class="glyphicon glyphicon-plus-sign"></i> Add New Data Pasien</button>
    </div>
  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>ID Pasien</th>
          <th>No Identitas Pasien</th>
          <th>Nama</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>No.Hp</th>
          <th style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody id="data-pasien">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_pasien; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataPasien', 'Delete This Data ?', 'Yes, Delete This Data'); ?>