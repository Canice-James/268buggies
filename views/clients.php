<!-- <h1>client page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title d-inline">Clients</h2>
        <!-- <p class="card-category"></p> -->
        <button class="btn btn-secondary pull-right" data-toggle="modal" data-target="#create" type="submit">Create</button>

      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-info">
            <th>ID</th>
            <th>Name</th>
            <th>Adress</th>
            <th>DOB</th>
            <th>phone</th>
            <th>type</th>
            <th>Emergency Contact</th>
            <th>Emergency Contact Number</th>
            <th></th>
          </thead>
          <tbody>

            <?php
            foreach (Client::getAll() as $row) {
              echo '
                <tr>
                  <td>' . $row['client_id'] . '</td>
                  <td>' . $row['client_fname'] . ' ' . $row['client_lname']. '</td>
                  <td>' . $row['client_addr'] . '</td>
                  <td>' . $row['client_dob'] . '</td>
                  <td>' . $row['client_phone'] . '</td>
                  <td>' . $row['type'] . '</td>
                  <td>' . $row['client_emerg_contact'] . '</td>
                  <td>' . $row['client_emerg_contact_num'] . '</td>   
                  <td>         
                    <button onclick="editRecord(\'' . $row['client_id'] . '\')" class="btn btn-sm btn-primary  edit-btn" data-toggle="modal" data-target="#edit" type="submit">Edit</button>
                  
                    <button onclick="deleteRecord(\'' . $row['client_id'] . '\')" class="btn btn-sm btn-danger delete-btn" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" class="form-control" id="id" >
        <div class="form-group">
          <label for="name">First Name</label>
          <input type="text" class="form-control" id="firstName" >
        </div>
        <div class="form-group">
          <label for="name">Last Name</label>
          <input type="text" class="form-control" id="lastName" >
        </div>
        <div class="form-group">
          <label for="runLeft"> Address </label>
          <input type="text" class="form-control" id="address">
        </div>
        <div class="form-group">
          <label for="dob">DOB</label>
          <input type="text" class="form-control" id="dob">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" >
        </div>
        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" id="type">
        </div>
        <div class="form-group">
          <label for="emergencyContact">Emergency Contact Name</label>
          <input type="text" class="form-control" id="emergencyContact">
        </div>
        <div class="form-group">
          <label for="emergencyContactNumber">Emergency Contact Number</label>
          <input type="text" class="form-control" id="emergencyContactNumber">
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
        <h5 class="modal-title" >Edit Client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" class="form-control" id="id" >
        <div class="form-group">
          <label for="name">First Name</label>
          <input type="text" class="form-control" id="firstName" >
        </div>
        <div class="form-group">
          <label for="name">Last Name</label>
          <input type="text" class="form-control" id="lastName" >
        </div>
        <div class="form-group">
          <label for="runLeft"> Address </label>
          <input type="text" class="form-control" id="address">
        </div>
        <div class="form-group">
          <label for="dob">DOB</label>
          <input type="text" class="form-control" id="dob">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="text" class="form-control" id="phone" >
        </div>
        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" id="type">
        </div>
        <div class="form-group">
          <label for="emergencyContact">Emergency Contact Name</label>
          <input type="text" class="form-control" id="emergencyContact">
        </div>
        <div class="form-group">
          <label for="emergencyContactNumber">Emergency Contact Number</label>
          <input type="text" class="form-control" id="emergencyContactNumber">
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
        <h4 class="modal-title w-100" id="myModalLabel">Delete Client?</h4>
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
      firstName: $('#create #firstName').val(),
      lastName: $('#create #lastName').val(),
      address: $('#create #address').val(),
      phone: $('#create #phone').val(),
      type: $('#create #type').val(),
      dob: $('#create #dob').val(),
      emergencyContact: $('#create #emergencyContact').val(),
      emergencyContactNumber: $('#create #emergencyContactNumber').val()
    }
    
    //alert(JSON.stringify(client))
    $.post( "./api/clients/add", newRecord, function( res ) {
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
      firstName: $('#edit #firstName').val(),
      lastName: $('#edit #lastName').val(),
      address: $('#edit #address').val(),
      phone: $('#edit #phone').val(),
      type: $('#edit #type').val(),
      dob: $('#edit #dob').val(),
      emergencyContact: $('#edit #emergencyContact').val(),
      emergencyContactNumber: $('#edit #emergencyContactNumber').val()
    }

    // alert(JSON.stringify(updatedRecord))
    $.post( "./api/clients/update", updatedRecord, function( res ) {
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
    $.post( "./api/clients/delete", deletedRecord, function( res ) {
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
  
  $.get( "./api/clients/getone", {"id": id}, function( res ) {
    res = JSON.parse(res);

    $('#edit #id').val(id)
    $('#edit #firstName').val(res.client_fname)
    $('#edit #lastName').val(res.client_lname)
    $('#edit #address').val(res.client_addr)
    $('#edit #dob').val(res.client_dob)
    $('#edit #phone').val(res.client_phone)
    $('#edit #type').val(res.type)
    $('#edit #emergencyContact').val(res.client_emerg_contact)
    $('#edit #emergencyContactNumber').val(res.client_emerg_contact_num)
  });
}

function deleteRecord(id){
  $('#delete #id').val(id)
}

</script>