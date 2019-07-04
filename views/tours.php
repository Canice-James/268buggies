<!-- <h1>tour page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h2 class="card-title d-inline">Tours</h2>
        <!-- <p class="card-category"></p> -->
        <button class="btn btn-secondary pull-right" onclick="loadWithClients('create')" data-toggle="modal" data-target="#create" type="submit">Create</button>

      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-info">
            <th>ID</th>
            <th>Client</th>
            <th>Group Tour</th>
            <th>Route</th>
            <th>Date</th>
            <th>Time</th>
            <th>Price</th>
            <th>No. Touricipants</th>
            <th>No. Buggies</th>
            <th>Needs Equipment</th>

            <th></th>
          </thead>
          <tbody>

            <?php
            foreach (Tour::getTours() as $row) {
              echo '
                <tr>
                  <td>' . $row['tour_id'] . '</td>
                  <td>' . $row['client_fname'] . ' ' . $row['client_lname'] .'</td>
                  <td>' . $row['group_tour'] . '</td>
                  <td>' . $row['route'] . '</td>
                  <td>' . $row['date'] . '</td>
                  <td>' . $row['time'] . '</td>
                  <td>' . $row['price'] . '</td>
                  <td>' . $row['no_partic'] . '</td>
                  <td>' . $row['num_of_buggies'] . '</td>
                  <td>' . $row['equip_requested'] . '</td>
                  <td>         
                    <button onclick="editRecord(\'' . $row['tour_id'] . '\')" class="btn btn-sm btn-primary  edit-btn" data-toggle="modal" data-target="#edit" type="submit">Edit</button>
                  
                    <button onclick="deleteRecord(\'' . $row['tour_id'] . '\')" class="btn btn-sm btn-danger delete-btn" data-toggle="modal" data-target="#delete" type="submit">Delete</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Add Tour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <input type="hidden" class="form-control" id="tourId" >
        <div class="form-group">
          <label for="clientId">Client </label>
          <select class="form-control" id="clientId">
            <option selected>Clients Failed to Load</option>
          </select>
        </div>
        <div class="form-group">
          <label for="route">Route</label>
          <input type="text" class="form-control" id="route">
        </div>
        <div class="form-group">
          <label for="route">Price</label>
          <input type="text" class="form-control" id="price">
        </div>
        <div class="form-group">
          <label for="isGroupTour">Is it a group?</label>
          <select class="form-control" id="isGroupTour">
            <option value="1" selected>Yes</option>
            <option value="0">No</option>
          </select>
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="text" class="form-control" id="date" >
        </div>
        <div class="form-group">
          <label for="time">Time</label>
          <input type="text" class="form-control" id="time">
        </div>
        <div class="form-group">
          <label for="participantAmount">No. Participant</label>
          <input type="text" class="form-control" id="participantAmount">
        </div>
        <div class="form-group">
          <label for="buggyAmount">No. Buggy </label>
          <input type="text" class="form-control" id="buggyAmount">
        </div>
        <div class="form-group">
          <label for="isEquipRequested">Does it require Equipment? </label>
          <select class="form-control" id="isEquipRequested">
            <option value="1">Yes</option>
            <option value="0" selected>No</option>
          </select>
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
        <h5 class="modal-title" >Edit Tour</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <input type="hidden" class="form-control" id="tourId" >
        <div class="form-group">
          <label for="clientId">Client </label>
          <select class="form-control" id="clientId">
            <option selected>Clients Failed to Load</option>
          </select>
        </div>
        <div class="form-group">
          <label for="route">Route</label>
          <input type="text" class="form-control" id="route">
        </div>
        <div class="form-group">
          <label for="route">Price</label>
          <input type="text" class="form-control" id="price">
        </div>
        <div class="form-group">
          <label for="isGroupTour">Is it a group?</label>
          <select class="form-control" id="isGroupTour">
            <option value="1" selected>Yes</option>
            <option value="0">No</option>
          </select>
        </div>
        <div class="form-group">
          <label for="date">Date</label>
          <input type="text" class="form-control" id="date" >
        </div>
        <div class="form-group">
          <label for="time">Time</label>
          <input type="text" class="form-control" id="time">
        </div>
        <div class="form-group">
          <label for="participantAmount">No. Participant</label>
          <input type="text" class="form-control" id="participantAmount">
        </div>
        <div class="form-group">
          <label for="buggyAmount">No. Buggy </label>
          <input type="text" class="form-control" id="buggyAmount">
        </div>
        <div class="form-group">
          <label for="isEquipRequested">Does it require Equipment? </label>
          <select class="form-control" id="isEquipRequested">
            <option value="1">Yes</option>
            <option value="0" selected>No</option>
          </select>
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
        <h4 class="modal-title w-100" id="myModalLabel">Delete Tour?</h4>
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
      tourId: $('#create #tourId').val(),
      clientId: $('#create #clientId').val(),
      route: $('#create #route').val(),
      isGroupTour: $('#create #isGroupTour').val(),
      date: $('#create #date').val(),
      time: $('#create #time').val(),
      price: $('#create #price').val(),
      participantAmount: $('#create #participantAmount').val(),
      buggyAmount: $('#create #buggyAmount').val(),
      isEquipRequested: $('#create #isEquipRequested').val()
    }
    
    //alert(JSON.stringify(tour))
    $.post( "./api/tours/add", newRecord, function( res ) {
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
      tourId: $('#edit #tourId').val(),
      clientId: $('#edit #clientId').val(),
      route: $('#edit #route').val(),
      isGroupTour: $('#edit #isGroupTour').val(),
      date: $('#edit #date').val(),
      time: $('#edit #time').val(),
      price: $('#edit #price').val(),
      participantAmount: $('#edit #participantAmount').val(),
      buggyAmount: $('#edit #buggyAmount').val(),
      isEquipRequested: $('#edit #isEquipRequested').val()
    }

    // alert(JSON.stringify(updatedRecord))
    $.post( "./api/tours/update", updatedRecord, function( res ) {
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
    $.post( "./api/tours/delete", deletedRecord, function( res ) {
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
  
  loadWithClients('edit');
  $.get( "./api/tours/getone", {"id": id}, function( res ) {
    res = JSON.parse(res);

    $('#edit #tourId').val(id)
    $('#edit #clientId').val(res.client_id)
    $('#edit #route').val(res.route)
    $('#edit #price').val(res.price)
    $('#edit #isGroupTour').val(res.group_tour)
    $('#edit #date').val(res.date)
    $('#edit #time').val(res.time)
    $('#edit #participantAmount').val(res.no_partic)
    $('#edit #buggyAmount').val(res.num_of_buggies)
    $('#edit #isEquipRequested').val(res.equip_requested)

  });
}

function deleteRecord(id){
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