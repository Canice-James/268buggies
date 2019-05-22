<!-- START QUICK STATISTICS AND LINKS -->

<div class="row">
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-warning card-header-icon">
        <div class="card-icon">
          <i class="material-icons">directions_car</i>
        </div>
        <p class="card-category">Buggies</p>
        <h3 class="card-title">6</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons text-danger">warning</i>
          <a href="#pablo">See damage reports...</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-success card-header-icon">
        <div class="card-icon">
          <i class="material-icons">settings</i>
        </div>
        <p class="card-category">Part</p>
        <h3 class="card-title">75</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">warning</i> 6 parts need replacement
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-danger card-header-icon">
        <div class="card-icon">
          <i class="material-icons">equalizer</i>
        </div>
        <p class="card-category">Revenue</p>
        <h3 class="card-title">$34,245</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">date_range</i> Last 7 days
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-6 col-sm-6">
    <div class="card card-stats">
      <div class="card-header card-header-info card-header-icon">
        <div class="card-icon">
          <i class="material-icons">people</i>
        </div>
        <p class="card-category">Employees</p>
        <h3 class="card-title">5</h3>
      </div>
      <div class="card-footer">
        <div class="stats">
        </div>
      </div>
    </div>
  </div>
</div>

<!-- END QUICK STATISTICS AND LINKS -->

<div class="row">

  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header card-header-primary">
        <h4 class="card-title">Tours</h4>
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
            foreach (Home::getTours() as $row) {
              echo '
                  <tr>
                    <td>' . $row['Tour_ID'] . '</td>
                    <td>' . $row['Client_ID'] . '</td>
                    <td>' . $row['Group_Tour'] . '</td>
                    <td>' . $row['Route'] . '</td>
                    <td>' . $row['Date'] . '</td>
                  </tr>
                ';
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-12">
    <div class="card">
      <div class="card-header card-header-danger">
        <h4 class="card-title">Incidents</h4>
        <p class="card-category">Last incident on <?php echo Home::getRecentIncidentDate(); ?></p>
      </div>
      <div class="card-body table-responsive">
        <table class="table table-hover">
          <thead class="text-warning">
            <th>ID</th>
            <th>Description</th>
            <th>Cause</th>
            <th>Date</th>
          </thead>
          <tbody>
            <?php
            foreach (Home::getIncidents() as $row) {
              echo '
                  <tr>
                    <td>' . $row['Incid_ID'] . '</td>
                    <td>' . $row['Incid_desc'] . '</td>
                    <td>' . $row['Cause_of_Incid'] . '</td>
                    <td>' . $row['Date'] . '</td>
                  </tr>
                ';
            } ?>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>