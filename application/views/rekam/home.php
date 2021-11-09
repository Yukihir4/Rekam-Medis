<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-4">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-rekam"><i class="glyphicon glyphicon-plus-sign"></i> Add New Data Rekam Medis</button>
    </div>
  </div>
  <!-- /.box-header -->

  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>ID Rekam Medis</th>
          <th>Tanggal Pemeriksaan</th>
          <th>Nama Pasien</th>
          <th>Keluhan</th>
          <th>Nama Dokter</th>
          <th>Diagnosa</th>
          <th>Poliklinik</th>
          <th>Data Obat</th>
          <th style="text-align: center;">Action</th>
        </tr>
      </thead>
      <tbody id="data-rekam">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_rekam; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataRekam', 'Delete This Data ?', 'Yes, Delete This Data'); ?>