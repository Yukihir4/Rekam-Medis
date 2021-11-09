<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Update Data Obat</center>
      </h3>
    </div>

    <form method="POST" id="form-update-obat">
      <div class="modal-body">
        <input type="hidden" name="id" value="<?php echo $dataObat->id_obat; ?>">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Obat</label>
          <div class="col-xs-8">
            <input class="form-control" type="text" disabled value="<?php echo $dataObat->id_obat; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Obat</label>
          <div class="col-xs-8">
            <input name="nama" class="form-control" type="text" value="<?php echo $dataObat->nama_obat; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Keterangan Obat</label>
          <div class="col-xs-8">
            <textarea name="keterangan" class="form-control" type="text"><?php echo $dataObat->keterangan_obat; ?></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Harga Obat</label>
          <div class="col-xs-8">
            <input name="harga" class="form-control" type="text" value="<?php echo $dataObat->harga_obat; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Stok Obat</label>
          <div class="col-xs-8">
            <input name="stok" class="form-control" type="text" value="<?php echo $dataObat->stok_obat; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tanggal Expired Obat</label>
          <div class="col-xs-8">
            <input name="tgl" class="form-control" value="<?= date('d F Y', strtotime($dataObat->tanggal_expired)); ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>