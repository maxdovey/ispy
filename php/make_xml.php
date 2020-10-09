<?php
$sname=$_POST["data"];
echo $sname;
$file_Dir = "journeys/";
$ext = ".xml";
$namefile2 = $sname.$ext;
$full_Path = $file_Dir.$namefile2;
$writer = new XMLWriter();
$writer->openURI($full_Path);
$writer->startDocument('1.0','UTF-8');
$writer->setIndent(6);
$writer->startElement('Item');
   $writer->startElement('Name');
   $writer->writeAttribute('FName', ' ');
   $writer->writeAttribute('SName', ' ');
   $writer->endElement('Name');
      $writer->startElement('Coordinates');
      $writer->startElement('Location');
         $writer->writeAttribute('Latitude', ' ');
         $writer->writeAttribute('Longitude', ' ');
         $writer->writeAttribute('Comment', ' ');
         $writer->endElement('Location');
$writer->endElement('Coordinates');
$writer->endDocument();
$writer->flush();
?>
