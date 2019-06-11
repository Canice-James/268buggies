<!-- <h1>buggy page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Buggies</h4>
        <p class="card-category"></p>
        <button class="btn btn-primary pull-right"  data-toggle="modal" data-target="#create" type="submit">Create</button>

      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-info">
            <th>ID</th>
            <th>Client ID</th>
            <th>Group Tour</th>
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
                    <td>' . $row['run_duration'] . '</td>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>