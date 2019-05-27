<?php
    require 'config.php';
    
    $filename=time().".xml";

    $sql = "select * from test order by id desc";
    $res = mysqli_query($conn, $sql);
   
    $xml = new XMLWriter();
    $xml->openMemory();
    //$xml->openURI("php://output");  //print on screen no file output
    $xml->setIndent(true);
    $xml->startDocument('1.0', 'UTF-8');
    $xml->startElement('all_news');
    while ($row = mysqli_fetch_assoc($res)) {
      $xml->startElement("news");
      $xml->writeElement("id", $row['id']);
      $xml->writeElement("headline", $row['heading']);
      $xml->writeElement("body", $row['summertext']);
	  $xml->writeElement("creationTime", $row['datetime']);
      $xml->writeElement("deletionTime", $row['deleted_at']);
      $xml->endElement();
    }
    $xml->endElement();
    $xml->endDocument();

    //header('Content-type: text/xml'); //print on screen no file output with output memory
    //echo $xml->outputMemory(); //print on screen no file output with output memory
    
    $file = $xml->outputMemory();
    file_put_contents($filename,$file);
    
    //$xml->flush(); //print on screen no file output

    // Free result set
    mysqli_free_result($res); 
    // Close connections
    mysqli_close($conn);
    header("location:listdata.php");
?>