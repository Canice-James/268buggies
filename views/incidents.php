<!-- <h1>incident page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title d-inline">Incidents</h2>
        <!-- <p class="card-category"></p> -->
        <button class="btn btn-secondary pull-right" onclick="loadWithClients('create')" data-toggle="modal" data-target="#create" type="submit">Create</button>

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
                    <button onclick="editRecord(\'' . $row['incid_id'] . '\')" class="btn btn-sm btn-primary  edit-btn" data-toggle="modal" data-target="#edit" type="submit">Edit</button>
                  
                    <button onclick="deleteRecord(\'' . $row['incid_id'] . '\')" class="btn btn-sm btn-danger delete-btn" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
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
          <select class="form-control" id="clientId">
            <option selected>Clients Failed to Load</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Description</label>
          <input type="text" class="form-control" id=description>
        </div>
        <div class="form-group">
          <label for="runLeft"> Cause </label>
          <input type="text" class="form-control" id="cause">
        </div>
        <div class="form-group">
          <label for="dob">Recommendation</label>
          <input type="text" class="form-control" id="recom">
        </div>
        <div class="form-group">
          <label for="phone">Date</label>
          <input type="text" class="form-control" id="date">
        </div>
        <div class="form-group">
          <label for="type">Time</label>
          <input type="text" class="form-control" id="time">
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
          <select class="form-control" id="clientId">
            <option selected>Clients Failed to Load</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Description</label>
          <input type="text" class="form-control" id=description>
        </div>
        <div class="form-group">
          <label for="runLeft"> Cause </label>
          <input type="text" class="form-control" id="cause">
        </div>
        <div class="form-group">
          <label for="dob">Recommendation</label>
          <input type="text" class="form-control" id="recom">
        </div>
        <div class="form-group">
          <label for="phone">Date</label>
          <input type="text" class="form-control" id="date">
        </div>
        <div class="form-group">
          <label for="type">Time</label>
          <input type="text" class="form-control" id="time">
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
        clientId: $('#create #clientId').val(),
        description: $('#create #description').val(),
        cause: $('#create #cause').val(),
        recom: $('#create #recom').val(),
        date: $('#create #date').val(),
        time: $('#create #time').val(),
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
        clientId: $('#create #clientId').val(),
        description: $('#create #description').val(),
        cause: $('#create #cause').val(),
        recom: $('#create #recom').val(),
        date: $('#create #date').val(),
        time: $('#create #time').val(),
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

    loadWithClients('edit');
    $.get("./api/incidents/getone", {
      "id": id
    }, function(res) {
      res = JSON.parse(res);
      $('#edit #id').val(id);
      $('#edit #clientId').val(res.client_id);
      $('#edit #description').val(res.incid_desc);
      $('#edit #cause').val(res.cause_of_incid);
      $('#edit #recom').val(res.recom);
      $('#edit #date').val(res.date);
      $('#edit #time').val(res.time);
    });
  }

  function deleteRecord(id) {
    $('#delete #id').val(id)
  }

  function loadWithClients(modalId) {

    $.get("./api/clients/getall", function(res) {
      res = JSON.parse(res);

      var selection = $("#" + modalId + " #clientId");
      selection.empty();
      $.each(res, function(idx, elem) {
        selection.append(`<option value="${elem.client_id}">${elem.client_fname} ${elem.client_lname}</option>`);
      });
    });
  }
</script>