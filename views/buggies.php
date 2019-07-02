<!-- <h1>buggy page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title d-inline">Buggies</h4>
        <!-- <p class="card-category"></p> -->
        <button class="btn btn-secondary pull-right" data-toggle="modal" data-target="#create" type="submit">Create</button>

      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-info">
            <th>ID</th>
            <th>Client ID</th>
            <!-- <th>Group Tour</th> -->
            <th>Route</th>
            <th>Date</th>
            <th></th>
          </thead>
          <tbody>

            <?php
            foreach (Buggy::getBuggies() as $row) {
              echo '
                  <tr>
                    <td>' . $row['buggy_id'] . '</td>
                    <td>' . $row['colour'] . '</td>
                    <!-- <td>' . $row['run_duration'] . '</td> -->
                    <td>' . $row['run_count'] . '</td>
                    <td>' . $row['run_left'] . '</td>
                    <td>         
                      <button onclick="editRecord(\'' . $row['buggy_id'] . '\')" class="btn btn-primary  edit-btn" data-toggle="modal" data-target="#edit" type="submit">Edit</button>
                    
                      <button onclick="deleteRecord(\'' . $row['buggy_id'] . '\')" class="btn btn-danger delete-btn" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Buggy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <div class="form-group">
          <label for="colour">Colour</label>
          <input type="text" class="form-control" id="colour" >
        </div>
        <!-- <div class="form-group">
          <label for="duration">duration</label>
          <input type="text" class="form-control" id="duration">
        </div> -->
        <div class="form-group">
          <label for="runCount">Run Count</label>
          <input type="text" class="form-control" id="runCount" >
        </div>
        <div class="form-group">
          <label for="runLeft">Run Left</label>
          <input type="text" class="form-control" id="runLeft">
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
        <h5 class="modal-title" >Edit Buggy</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <div class="form-group">
          <label for="colour">Colour</label>
          <input type="hidden" class="form-control" id="id" >
          <input type="text" class="form-control" id="colour" >
        </div>
        <!-- <div class="form-group">
          <label for="duration">duration</label>
          <input type="text" class="form-control" id="duration">
        </div> -->
        <div class="form-group">
          <label for="runCount">Run Count</label>
          <input type="text" class="form-control" id="runCount" >
        </div>
        <div class="form-group">
          <label for="runLeft">Run Left</label>
          <input type="text" class="form-control" id="runLeft">
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
        <h4 class="modal-title w-100" id="myModalLabel">Delete Buggy?</h4>
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
      colour: $('#create #colour').val(),
      runCount: $('#create #runCount').val(),
      runLeft: $('#create #runLeft').val()
    }
    
    //alert(JSON.stringify(buggy))
    $.post( "./api/buggies/add", newRecord, function( res ) {
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
      colour: $('#edit #colour').val(),
      runCount: $('#edit #runCount').val(),
      runLeft: $('#edit #runLeft').val()
    }

    // alert(JSON.stringify(updatedRecord))
    $.post( "./api/buggies/update", updatedRecord, function( res ) {
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
    $.post( "./api/buggies/delete", deletedRecord, function( res ) {
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
  
  $.get( "./api/buggies/getone", {"id": id}, function( res ) {
    res = JSON.parse(res);

    $('#edit #id').val(id)
    $('#edit #colour').val(res.colour)
    $('#edit #runCount').val(res.run_count),
    $('#edit #runLeft').val(res.run_left)
  });
}

function deleteRecord(id){
  $('#delete #id').val(id)
}

</script>