<?php
$NameFile=$_POST["name"];
$Latitude=$_POST["LatData"];
$Longitude=$_POST["LongData"];
$Comment=$_POST["CommentData"];
echo $Latitude;
echo $Longitude;
$file_Dir = "journeys/";
$ext = ".xml";
$namefile2 = $NameFile.$ext;
$full_Path = $file_Dir.$namefile2;
// The file test.xml contains an XML document with a root element
// and at least an element /[root]/title.
if (file_exists($full_Path)) {
    $xml = simplexml_load_file(($full_Path));

    // print_r($xml);
} else {
    exit('Failed to open test.xml.');
}
$Name = $xml->Name;
// print_r($Name);
$Location = $Name->Coordinates->addChild('Location');
$Location->addAttribute('Latitude', $Latitude);
$Location->addAttribute('Longitude',$Longitude);
$Location->addAttribute('Comment',$Comment);
$xml->asXML($full_Path);
?>
