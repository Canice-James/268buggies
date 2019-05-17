<h1>buggy page</h1>

<?php

while ($row= $data['buggies']->fetch())
{
  //var_dump($row);
  echo "\n";
    echo "<h4>".$row['Buggy_ID'] . " " . $row['Colour'] . "</h4>\n";
}
?>