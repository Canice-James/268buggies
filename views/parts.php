
<div class="row">

<div class="col-lg-12 col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title">Parts</h4>
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
          foreach (Part::getParts() as $row) {
            echo '
                <tr>
                  <td>' . $row['Part_ID'] . '</td>
                  <td>' . $row['Supplier_ID'] . '</td>
                  <td>' . $row['Part_Name'] . '</td>
                  <td>' . $row['Run_Rate'] . '</td>
                  <td>' . $row['Quantity'] . '</td>
                </tr>
              ';
          } ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>