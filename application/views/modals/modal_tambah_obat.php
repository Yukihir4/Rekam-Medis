<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Add New Data Obat</center>
      </h3>
    </div>

    <form id="form-tambah-obat" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Obat</label>
          <div class="col-xs-8">
            <input name="id" class="form-control" type="text" placeholder="ID Obat">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Obat</label>
          <div class="col-xs-8">
            <input name="nama" class="form-control" type="text" placeholder="Nama Obat">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Keterangan Obat</label>
          <div class="col-xs-8">
            <textarea name="keterangan" id="keterangan" class="form-control" type="text" placeholder="Keterangan Obat"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Harga Obat (Rp)</label>
          <div class="col-xs-8">
            <input name="harga" id="harga" class="form-control" type="text" placeholder="Harga Obat"></input>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Stok Obat</label>
          <div class="col-xs-8">
            <input name="stok" id="stok" class="form-control" type="text" placeholder="Stok Obat"></input>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tanggal Expired Obat</label>
          <div class="col-xs-8">
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input name="tgl" id="tgl" type="date" value="<?= date('Y-m-d'); ?>" class="form-control pull-right">
            </div>
          </div>
        </div>
        <br>

      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
      </div>
    </form>
  </div>
</div>