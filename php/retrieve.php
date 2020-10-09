<?php
$q=$_GET["q"];
$file_Dir = "journeys/";
$full_Path = $file_Dir.$q;
// echo ($full_Path);
if (file_exists($full_Path)) {
    $xml = simplexml_load_file(($full_Path));

    // print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
$Coordinates = $xml->Name->Coordinates;
echo "<tr>";
echo "<th> Latitude </th>";
echo "<th> Longitude </th>";
echo "<th> Observation </th>";
echo "</tr>";
foreach($Coordinates->children() as $item) {
    echo "<tr>";
    echo "<td>{$item['Latitude']}</td>";
    echo "<td>{$item['Longitude']}</td>";
    echo "<td>{$item['Comment']}</td>";
    echo "</tr>";
}
?>
