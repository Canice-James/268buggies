<!-- <h1>buggy page</h1> -->


<div class="row">

  <div class="col-lg-12 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Buggies</h4>
        <p class="card-category"></p>
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