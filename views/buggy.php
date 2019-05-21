<h1>buggy page</h1>

<?php
foreach (BuggyModel::getAll() as $row) {

  //var_dump($row);
  echo "\n";
    echo "<h4>".$row['Buggy_ID'] . " " . $row['Colour'] . "</h4>\n";
}
?>