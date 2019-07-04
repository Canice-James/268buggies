<!-- <h1>part page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title d-inline">Parts</h2>
        <!-- <p class="card-category"></p> -->
        <button class="btn btn-secondary pull-right" data-toggle="modal" data-target="#create" type="submit">Create</button>

      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-info">
            <th>ID</th>
            <th>Name</th>
            <th>Run Limit</th>
            <th>Supplier</th>
            <th>Quantity</th>
            <th></th>
          </thead>
          <tbody>

            <?php
            foreach (Part::getParts() as $row) {
              echo '
                <tr>
                  <td>' . $row['part_id'] . '</td>
                  <td>' . $row['part_name'] . '</td>
                  <td>' . $row['run_rate'] . '</td>
                  <td>' . $row['supplier_id'] . '</td>
                  <td>' . $row['quantity'] . '</td>
                  <td>         
                    <button onclick="editRecord(\'' . $row['part_id'] . '\')" class="btn btn-sm btn-primary  edit-btn" data-toggle="modal" data-target="#edit" type="submit">Edit</button>
                  
                    <button onclick="deleteRecord(\'' . $row['part_id'] . '\')" class="btn btn-sm btn-danger delete-btn" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
                  </td>
                </tr>
                ';
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- START CREATE MODAL -->
<div class="modal fade" id="create" tabindex="-1" role="dialog" aria-labelledby="create" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Part</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" class="form-control" id="id" >
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" >
        </div>
        <div class="form-group">
          <label for="runLeft">Runs Limit</label>
          <input type="text" class="form-control" id="runLeft">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price</label>
          <input type="text" class="form-control" id="unitPrice">
        </div>
        <div class="form-group">
          <label for="supplier">Supplier</label>
          <input type="text" class="form-control" id="supplier" >
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control" id="quantity">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="save" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END CREATE MODAL -->



<!-- START EDIT MODAL -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Edit Part</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <input type="hidden" class="form-control" id="id" >
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" >
        </div>
        <div class="form-group">
          <label for="runLeft">Run Limit</label>
          <input type="text" class="form-control" id="runLeft">
        </div>
        <div class="form-group">
          <label for="unitPrice">Unit Price</label>
          <input type="text" class="form-control" id="unitPrice">
        </div>
        <div class="form-group">
          <label for="supplierId">Supplier</label>
          <input type="text" class="form-control" id="supplierId" >
        </div>
        <div class="form-group">
          <label for="quantity">Quantity</label>
          <input type="text" class="form-control" id="quantity">
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" id="save" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- END EDIT MODAL -->


<!-- START DELETE MODAL -->
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete"
  aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Delete Part?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This can't be undone</p>
        <input type="hidden" class="form-control" id="id" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" id="save" class="btn btn-danger btn-sm">Delete</button>
      </div>
    </div>
  </div>
</div>
<!-- END DELETE MODAL -->

<script>

$( document ).ready(function() {

  $("#create #save").click(function(){

    let newRecord = {
      id: $('#create #id').val(),
      name: $('#create #name').val(),
      supplierId: $('#create #supplierId').val(),
      unitPrice: $('#create #unitPrice').val(),
      runLeft: $('#create #runLeft').val(),
      quantity: $('#create #quantity').val()
    }
    
    //alert(JSON.stringify(part))
    $.post( "./api/parts/add", newRecord, function( res ) {
      res = JSON.parse(res);
      if (res.status_code == 200){
        $('#create').modal('hide')
        location.reload();
      }
      else {
        alert(res.status_message)
      }
    });
  });

  $("#edit #save").click(function(){

    let updatedRecord = {
      id: $('#edit #id').val(),
      name: $('#edit #name').val(),
      unitPrice: $('#edit #unitPrice').val(),
      supplierId: $('#edit #supplierId').val(),
      runLeft: $('#edit #runLeft').val(),
      quantity: $('#edit #quantity').val()
    }

    // alert(JSON.stringify(updatedRecord))
    $.post( "./api/parts/update", updatedRecord, function( res ) {
      res = JSON.parse(res);
      if (res.status_code == 200){
        $('#edit').modal('hide')
        location.reload();
      }
      else {
        alert(res.status_message)
      }
    });
  });

  $("#delete #save").click(function(){

    let deletedRecord = {
      id: $('#delete #id').val(),
    }
    // alert(JSON.stringify(deletedRecord))
    $.post( "./api/parts/delete", deletedRecord, function( res ) {
      res = JSON.parse(res);

      if (res.status_code == 200){
        $('#delete').modal('hide')
        location.reload();
      }
      else {
        alert(res.status_message)
      }
    });
  });

  

});

function editRecord(id){
  
  $.get( "./api/parts/getone", {"id": id}, function( res ) {
    res = JSON.parse(res);

    $('#edit #id').val(id)
    $('#edit #name').val(res.part_name)
    $('#edit #unitPrice').val(res.unit_price)    
    $('#edit #runLeft').val(res.run_rate)
    $('#edit #supplierId').val(res.supplier_id)
    $('#edit #quantity').val(res.quantity)
  });
}

function deleteRecord(id){
  $('#delete #id').val(id)
}

</script>