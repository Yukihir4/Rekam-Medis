<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Add New Data Pasien</center>
      </h3>
    </div>

    <form id="form-tambah-pasien" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Pasien</label>
          <div class="col-xs-8">
            <input name="id" class="form-control" type="text" placeholder="ID Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nomor Rekam Medis</label>
          <div class="col-xs-8">
            <input name="nomorRM" class="form-control" type="text" placeholder="Nomor Identitas Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nomor Identitas Pasien</label>
          <div class="col-xs-8">
            <input name="nomorId" class="form-control" type="text" placeholder="Nomor Identitas Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Pasien</label>
          <div class="col-xs-8">
            <input name="nama" class="form-control" type="text" placeholder="Nama Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Jenis Kelamin</label>
          <div class="col-xs-8">
            <select name="kelamin" class="form-control select2">
              <option selected disabled>Pilih Jenis Kelamin</option>
              <option value="L">Laki-Laki</option>
              <option value="P">Perempuan</option>
            </select>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tempat Lahir Pasien</label>
          <div class="col-xs-8">
            <input name="tempatLahir" class="form-control" type="text" placeholder="Tempat Lahir Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tanggal Lahir Pasien</label>
          <div class="col-xs-8">
            <div class="input-group date">
              <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
              </div>
              <input name="tglLahir" type="date" value="<?= date('Y-m-d'); ?>" class="form-control pull-right">
            </div>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Usia Pasien</label>
          <div class="col-xs-8">
            <input name="usia" class="form-control" type="text" placeholder="Usia Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Agama Pasien</label>
          <div class="col-xs-8">
            <input name="agama" class="form-control" type="text" placeholder="Agama Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Alamat Pasien</label>
          <div class="col-xs-8">
            <input name="alamat" class="form-control" type="text" placeholder="Alamat Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">No.Hp Pasien</label>
          <div class="col-xs-8">
            <input name="telp" class="form-control" type="text" placeholder="No.Hp Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Pekerjaan Pasien</label>
          <div class="col-xs-8">
            <input name="pekerjaan" class="form-control" type="text" placeholder="Pekerjaan Pasien">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Status Pasien</label>
          <div class="col-xs-8">
            <input name="status" class="form-control" type="text" placeholder="Status Pasien">
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