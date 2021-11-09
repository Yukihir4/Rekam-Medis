<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title"><center>Update Data Dokter</center></h3>
    </div>
    
    <form method="POST" id="form-update-dokter">
      <div class="modal-body">
      <input type="hidden" name="idDok" value="<?php echo $dataDokter->id_dokter; ?>">
      <div class="form-group">
          <label class="control-label col-xs-3" >ID Dokter</label>
            <div class="col-xs-8">
              <input class="form-control" type="text" disabled value="<?php echo $dataDokter->id_dokter; ?>">
            </div>
        </div>
        <br>
        <br>
       
        <div class="form-group">
          <label class="control-label col-xs-3" >Nama Dokter</label>
            <div class="col-xs-8">
              <input name="nama" class="form-control" type="text" value="<?php echo $dataDokter->nama_dokter; ?>">
            </div>
        </div>
        <br>
        <br>
        
        <div class="form-group">
          <label class="control-label col-xs-3" >Spesialis Dokter</label>
            <div class="col-xs-8">
              <input name="spesialis" class="form-control" type="text" value="<?php echo $dataDokter->spesialis; ?>">
            </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-3" >Alamat Dokter</label>
            <div class="col-xs-8">
              <input name="alamat" class="form-control" type="text" value="<?php echo $dataDokter->alamat; ?>">
            </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-3" >No.Hp Dokter</label>
            <div class="col-xs-8">
              <input name="telp" class="form-control" type="text" value="<?php echo $dataDokter->no_telp; ?>">
            </div>
        </div>
        <br>
        
      </div>
      <div class="modal-footer">
        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
    </form>
  </div>
</div>