<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-primary ">
      <h3 class="modal-title"><center>Add New Data Poli</center></h3>
    </div>
    
    <form id="form-tambah-poli" method="POST">
      <div class="modal-body">
        <div class="form-group">
          <label class="control-label col-xs-4" >ID Poli</label>
            <div class="col-xs-8">
              <input name="id" class="form-control" type="text" placeholder="ID Poli">
            </div>
        </div>
        <br>
        <br>
        
        <div class="form-group">
          <label class="control-label col-xs-4" >Nama Poli</label>
            <div class="col-xs-8">
              <input name="nama" class="form-control" type="text" placeholder="Nama Poli">
            </div>
        </div>
        <br>
        <br>

        <div class="form-group">
          <label class="control-label col-xs-4" >Gedung Poli</label>
            <div class="col-xs-8">
              <input name="gedung" class="form-control" type="text" placeholder="Gedung Poli">
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