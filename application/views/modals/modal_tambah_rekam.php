<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Add New Data Rekam Medis</center>
      </h3>
    </div>

    <form id="form-tambah-rekam" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Rekam Medis</label>
          <div class="col-xs-8">
            <input name="id_rm" class="form-control" type="text" placeholder="ID Rekam Medis">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Pasien</label>
          <div class="col-xs-8">
            <select name="pasien" id="pasien" class="form-control select2" style="width: 100%">
              <option selected disabled>Choose Pasien</option>
              <?php
              foreach ($dataPasien as $pasien) {
              ?>
                <option value="<?php echo $pasien->id_pasien; ?>">
                  <?php echo $pasien->nama_pasien; ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Keluhan</label>
          <div class="col-xs-8">
            <textarea name="keluhan" id="keluhan" class="form-control" type="text" placeholder="Keluhan Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Dokter</label>
          <div class="col-xs-8">
            <select name="dokter" id="dokter" class="form-control select2" style="width: 100%">
              <option selected disabled>Choose Dokter</option>
              <?php
              foreach ($dataDokter as $dokter) {
              ?>
                <option value="<?php echo $dokter->id_dokter; ?>">
                  <?php echo $dokter->nama_dokter; ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Diagnosa</label>
          <div class="col-xs-8">
            <textarea name="diagnosa" id="diagnosa" class="form-control" type="text" placeholder="Diagnosa Dokter"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Poliklinik</label>
          <div class="col-xs-8">
            <select name="poli" id="poli" class="form-control select2" style="width: 100%">
              <option selected disabled>Choose Poliklinik</option>
              <?php
              foreach ($dataPoli as $poli) {
              ?>
                <option value="<?php echo $poli->id_poli; ?>">
                  <?php echo $poli->nama_poli; ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Obat</label>
          <div class="col-xs-8">
            <select multiple name="obat[]" id="obat" class="form-control select2" size="7" style="width: 100%">
              <?php
              foreach ($dataObat as $obat) {
              ?>
                <option value="<?php echo $obat->id_obat; ?>">
                  <?php echo $obat->nama_obat; ?>
                </option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tanggal Periksa</label>
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