<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title">
        <center>Add New Data Pemeriksaan</center>
      </h3>
    </div>

    <form id="form-tambah-pemeriksaan" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Pemeriksaan</label>
          <div class="col-xs-8">
            <input name="idPeriksa" class="form-control" type="text" placeholder="ID Pemeriksaan">
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Pasien</label>
          <div class="col-xs-8">
            <select name="pasien" class="form-control select2" style="width: 100%">
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
          <label class="control-label col-xs-4">Dokter Penanggung Jawab</label>
          <div class="col-xs-8">
            <select name="dokter" class="form-control select2" style="width: 100%">
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
          <label class="control-label col-xs-4">Poliklinik</label>
          <div class="col-xs-8">
            <select name="poli" class="form-control select2" style="width: 100%">
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
          <label class="control-label col-xs-4">Tanggal Pemeriksaan</label>
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
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Anamnesis</label>
          <div class="col-xs-8">
            <textarea name="anamnesis" id="anamnesis" class="form-control" type="text" placeholder="Anamnesis Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Pemeriksaan Fisik</label>
          <div class="col-xs-8">
            <textarea name="fisik" id="fisik" class="form-control" type="text" placeholder="Pemeriksaan Fisik Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Hasil Penunjang</label>
          <div class="col-xs-8">
            <textarea name="penunjang" id="penunjang" class="form-control" type="text" placeholder="Hasil Penunjang Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tensi Darah Pasien</label>
          <div class="col-xs-8">
            <input name="tensi" id="tensi" class="form-control" type="text" placeholder="Tensi Darah Pasien"></input>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Diagnosa Pasien</label>
          <div class="col-xs-8">
            <textarea name="diagnosa" id="diagnosa" class="form-control" type="text" placeholder="Diagnosa Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tindakan Kepada Pasien</label>
          <div class="col-xs-8">
            <textarea name="tindakan" id="tindakan" class="form-control" type="text" placeholder="Tindakan Kepada  Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Saran Kepada Pasien</label>
          <div class="col-xs-8">
            <textarea name="saran" id="saran" class="form-control" type="text" placeholder="Saran Kepada Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Resep Obat</label>
          <div class="col-xs-8">
            <textarea name="resep" id="resep" class="form-control" type="text" placeholder="Resep Obat Pasien"></textarea>
          </div>
        </div>
        <br>
        <br>
        <br>

      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-primary">Add Data</button>
      </div>
    </form>
  </div>
</div>