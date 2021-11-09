<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Update Data Pasien</center>
      </h3>
    </div>

    <form method="POST" id="form-update-pasien">
      <div class="modal-body">
        <input type="hidden" name="id" value="<?php echo $dataPasien->id_pasien; ?>">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Pasien</label>
          <div class="col-xs-8">
            <input class="form-control" type="text" disabled value="<?php echo $dataPasien->id_pasien; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nomor Rekam Medis</label>
          <div class="col-xs-8">
            <input name="nomorRM" class="form-control" type="text" value="<?php echo $dataPasien->nomor_rm; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nomor Identitas Pasien</label>
          <div class="col-xs-8">
            <input name="nomorId" class="form-control" type="text" value="<?php echo $dataPasien->nomor_identitas; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Pasien</label>
          <div class="col-xs-8">
            <input name="nama" class="form-control" type="text" value="<?php echo $dataPasien->nama_pasien; ?>">
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
            </select>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tempat Lahir Pasien</label>
          <div class="col-xs-8">
            <input name="tempatLahir" class="form-control" type="text" value="<?php echo $dataPasien->tempat_lahir; ?>">
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
            <input name="usia" class="form-control" type="text" value="<?php echo $dataPasien->usia; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Agama Pasien</label>
          <div class="col-xs-8">
            <input name="agama" class="form-control" type="text" value="<?php echo $dataPasien->agama; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Alamat Pasien</label>
          <div class="col-xs-8">
            <input name="alamat" class="form-control" type="text" value="<?php echo $dataPasien->alamat; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">No.Hp Pasien</label>
          <div class="col-xs-8">
            <input name="telp" class="form-control" type="text" value="<?php echo $dataPasien->no_telp; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Pekerjaan Pasien</label>
          <div class="col-xs-8">
            <input name="pekerjaan" class="form-control" type="text" value="<?php echo $dataPasien->pekerjaan; ?>">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Status Pasien</label>
          <div class="col-xs-8">
            <input name="status" class="form-control" type="text" value="<?php echo $dataPasien->status; ?>">
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