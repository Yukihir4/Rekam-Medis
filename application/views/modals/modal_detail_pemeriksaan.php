<div class="col-md-12 well">

  <h3>
    <center>Detail Pemeriksaan</center>
  </h3>

  <div class="box box-body">
    <div class="row invoice-info">
      <div class="col-sm-2 invoice-col">
      </div>

      <div class="col-sm-8 invoice-col">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Pemeriksaan</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->id_pemeriksaan; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nomor Rekam Medis</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->nomor_rm; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Tanggal Pemeriksaan</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= date('d F Y', strtotime($dataPemeriksaan->tanggal_pemeriksaan)); ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>

      <div class="col-sm-2 invoice-col">
      </div>

      <div class="col-sm-4 invoice-col">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Pasien</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->id_pasien; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Pasien</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->nama_pasien; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>
      </div>

      <div class="col-sm-4 invoice-col">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Dokter</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->id_dokter; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Dokter</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->nama_dokter; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Spesialis</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->spesialis; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>
        <br>
      </div>

      <div class="col-sm-4 invoice-col">
        <div class="form-group">
          <label class="control-label col-xs-4">ID Poli</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->id_poli; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4">Nama Poli</label>
          <div class="col-xs-8">
            <input class="form-control" value="<?= $dataPemeriksaan->nama_poli; ?>" type="text" readonly>
          </div>
        </div>
        <br>
        <br>
      </div>

      <div class="col-sm-12 invoice-col">
        <label class="control-label">Pemeriksaan Anamnesis</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->anamnesis; ?></textarea>
        </div>
        <br>

        <label class="control-label">Pemeriksaan Fisik</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->pemeriksaan_fisik; ?></textarea>
        </div>
        <br>

        <label class="control-label">Hasil Penunjang Pemeriksaan</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->hasil_penunjang; ?></textarea>
        </div>
        <br>

        <label class="control-label">Tensi Darah Pasien</label>
        <div class="from-group">
          <input class="form-control" value="<?php echo $dataPemeriksaan->tensi_darah; ?>" type="text" readonly></input>
        </div>
        <br>

        <label class="control-label">Diagnosa Dokter</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->diagnosis; ?></textarea>
        </div>
        <br>

        <label class="control-label">Tindakan Kepada Pasien</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->tindakan; ?></textarea>
        </div>
        <br>

        <label class="control-label">Saran Kepada Pasien</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->saran; ?></textarea>
        </div>
        <br>

        <label class="control-label">Resep Obat Pasien</label>
        <div class="from-group">
          <textarea class="form-control" type="text" readonly><?php echo $dataPemeriksaan->resep; ?></textarea>
        </div>
        <br>
      </div>
    </div>

    <div class="text-right">
      <button class="btn btn-danger" data-dismiss="modal"> Close</button>
    </div>
  </div>
</div>