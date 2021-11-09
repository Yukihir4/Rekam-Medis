<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Add New Data Dokter</center>
      </h3>
    </div>

    <form id="form-tambah-dokter" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-xs-3">ID Dokter</label>
          <div class="col-xs-8">
            <input name="idDok" class="form-control" type="text" placeholder="ID Dokter">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-3">Nama Dokter</label>
          <div class="col-xs-8">
            <input name="nama" class="form-control" type="text" placeholder="Nama Dokter">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-3">Spesialis Dokter</label>
          <div class="col-xs-8">
            <input name="spesialis" class="form-control" type="text" placeholder="Spesialis Dokter">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-3">Alamat Dokter</label>
          <div class="col-xs-8">
            <input name="alamat" class="form-control" type="text" placeholder="Alamat Dokter">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-3">No.Hp Dokter</label>
          <div class="col-xs-8">
            <input name="telp" class="form-control" type="text" placeholder="No.Hp Dokter">
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