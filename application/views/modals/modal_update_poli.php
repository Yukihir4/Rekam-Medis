<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title"><center>Update Data Poliklinik</center></h3>
    </div>
    
    <form method="POST" id="form-update-poli">
      <div class="modal-body">
      <input type="hidden" name="id" value="<?php echo $dataPoli->id_poli; ?>">
      <div class="form-group">
          <label class="control-label col-xs-4" >ID Poliklinik</label>
            <div class="col-xs-8">
              <input class="form-control" type="text" disabled value="<?php echo $dataPoli->id_poli; ?>">
            </div>
        </div>
        <br>
        <br>
        
        <div class="form-group">
          <label class="control-label col-xs-4" >Nama Poliklinik</label>
            <div class="col-xs-8">
              <input name="nama" class="form-control" type="text" value="<?php echo $dataPoli->nama_poli; ?>">
            </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4" >Gedung Poliklinik</label>
            <div class="col-xs-8">
              <input name="gedung" class="form-control" type="text" value="<?php echo $dataPoli->gedung; ?>">
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