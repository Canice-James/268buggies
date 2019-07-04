<!-- <h1>incident page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title d-inline">Incidents</h2>
        <!-- <p class="card-category"></p> -->
        <button class="btn btn-secondary pull-right" data-toggle="modal" data-target="#create" type="submit">Create</button>

      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-info">
            <th>ID</th>
            <th>Client</th>
            <th>Description</th>
            <th>Cause</th>
            <th>Recommendation</th>
            <th>Date</th>
            <th>Time</th>
            <th></th>
          </thead>
          <tbody>

            <?php
            foreach (Incident::getAll() as $row) {
              echo '
                <tr>
                  <td>' . $row['incid_id'] . '</td>
                  <td>' . $row['client_fname'] . ' ' . $row['client_lname'] . '</td>
                  <td>' . $row['incid_desc'] . '</td>
                  <td>' . $row['cause_of_incid'] . '</td>
                  <td>' . $row['recom'] . '</td>
                  <td>' . $row['date'] . '</td>
                  <td>' . $row['time'] . '</td>
                  <td>' . $row['incident_emerg_contact'] . '</td>
                  <td>' . $row['incident_emerg_contact_num'] . '</td>   
                  <td>         
                    <button onclick="editRecord(\'' . $row['incident_id'] . '\')" class="btn btn-sm btn-primary  edit-btn" data-toggle="modal" data-target="#edit" type="submit">Edit</button>
                  
                    <button onclick="deleteRecord(\'' . $row['incident_id'] . '\')" class="btn btn-sm btn-danger delete-btn" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Incident</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <input type="hidden" class="form-control" id="id">
        <input type="hidden" class="form-control" id="id">
        <div class="form-group">
          <label for="name">Client</label>
          <input type="text" class="form-control" id="firstName">
        </div>
        <div class="form-group">
          <label for="name">Description</label>
          <input type="text" class="form-control" id="lastName">
        </div>
        <div class="form-group">
          <label for="runLeft"> Cause </label>
          <input type="text" class="form-control" id="address">
        </div>
        <div class="form-group">
          <label for="dob">Recommendation</label>
          <input type="text" class="form-control" id="dob">
        </div>
        <div class="form-group">
          <label for="phone">Date</label>
          <input type="text" class="form-control" id="phone">
        </div>
        <div class="form-group">
          <label for="type">Time</label>
          <input type="text" class="form-control" id="type">
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
        <h5 class="modal-title">Edit Incident</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <input type="hidden" class="form-control" id="id">
        <div class="form-group">
          <label for="name">Client</label>
          <input type="text" class="form-control" id="firstName">
        </div>
        <div class="form-group">
          <label for="name">Description</label>
          <input type="text" class="form-control" id="lastName">
        </div>
        <div class="form-group">
          <label for="runLeft"> Cause </label>
          <input type="text" class="form-control" id="address">
        </div>
        <div class="form-group">
          <label for="dob">Recommendation</label>
          <input type="text" class="form-control" id="dob">
        </div>
        <div class="form-group">
          <label for="phone">Date</label>
          <input type="text" class="form-control" id="phone">
        </div>
        <div class="form-group">
          <label for="type">Time</label>
          <input type="text" class="form-control" id="type">
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
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-sm" role="document">


    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Delete Incident?</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>This can't be undone</p>
        <input type="hidden" class="form-control" id="id">
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
  $(document).ready(function() {

    $("#create #save").click(function() {

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

      //alert(JSON.stringify(incident))
      $.post("./api/incidents/add", newRecord, function(res) {
        res = JSON.parse(res);
        if (res.status_code == 200) {
          $('#create').modal('hide')
          location.reload();
        } else {
          alert(res.status_message)
        }
      });
    });

    $("#edit #save").click(function() {

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
      $.post("./api/incidents/update", updatedRecord, function(res) {
        res = JSON.parse(res);
        if (res.status_code == 200) {
          $('#edit').modal('hide')
          location.reload();
        } else {
          alert(res.status_message)
        }
      });
    });

    $("#delete #save").click(function() {

      let deletedRecord = {
        id: $('#delete #id').val(),
      }
      // alert(JSON.stringify(deletedRecord))
      $.post("./api/incidents/delete", deletedRecord, function(res) {
        res = JSON.parse(res);

        if (res.status_code == 200) {
          $('#delete').modal('hide')
          location.reload();
        } else {
          alert(res.status_message)
        }
      });
    });



  });

  function editRecord(id) {

    $.get("./api/incidents/getone", {
      "id": id
    }, function(res) {
      res = JSON.parse(res);

      $('#edit #id').val(id)
      $('#edit #firstName').val(res.incident_fname)
      $('#edit #lastName').val(res.incident_lname)
      $('#edit #address').val(res.incident_addr)
      $('#edit #dob').val(res.incident_dob)
      $('#edit #phone').val(res.incident_phone)
      $('#edit #type').val(res.type)
      $('#edit #emergencyContact').val(res.incident_emerg_contact)
      $('#edit #emergencyContactNumber').val(res.incident_emerg_contact_num)
    });
  }

  function deleteRecord(id) {
    $('#delete #id').val(id)
  }
</script>