<h1>buggy page</h1>

<?php
foreach (Buggy::getBuggies() as $row) {

  echo "\n";
    echo "<h4>".$row['Buggy_ID'] . " " . $row['Colour'] . "</h4>\n";
}
?>