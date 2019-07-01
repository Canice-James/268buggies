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
                  </tr>
                ';
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
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


<script>

$( document ).ready(function() {

  $("#save").click(function(){

    let buggy = {
      colour: $('#colour').val(),
      runCount: $('#runCount').val(),
      runLeft: $('#runLeft').val()
    }
    
    //alert(JSON.stringify(buggy))
    $.post( "./api/BuggyController-addBuggy", buggy, function( res ) {
      res = JSON.parse(res);
      if (res.code == 200){
        alert("success")
        $('#create').modal('hide')
        location.reload();
      }
      else {
        alert(res.status_message)
      }
    });

  });
});
     
</script>