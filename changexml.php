<?php
/*
 * Loading a XML from a file, adding new elements and editing elements
 */
ini_set('display_errors', 'On');
error_reporting(E_ALL);
//get entry from form
$title = $_POST["title"];
$author = $_POST["author"];
echo $title;

if (file_exists('bookList.xml')) {
    //loads the xml and returns a simplexml object
    $xml = simplexml_load_file('bookList.xml');
    //print_r($xml);
    
    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
    //echo htmlentities($xmlFormat);


    //displaying the element in proper format
  echo '<u><b>This is the xml code from test2.xml:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre><br /><br />'; 

    //adding new child to the xml
    $newChild = $xml->addChild('suggestions');
    $newChild->addChild('title', $title);
    $newChild->addChild('author', $author);

  
    //transforming the object in xml format
    $xmlFormat = $xml->asXML();
   // echo htmlentities($xmlFormat);

    //displaying the element in proper format
   echo '<u><b>This is the xml code from product.xml with new elements added:</b></u>
     <br /><br />
     <pre>' . htmlentities($xmlFormat, ENT_COMPAT | ENT_HTML401, "ISO-8859-1") . '</pre>';

file_put_contents('product.xml', $xml->saveXML());


} else {
    exit('Failed to open bookList.xml.'); 
}
/*writeRSS();
function writeRSS(){
    if (file_exists('rss.xml')) {
        $title = $_POST["title"];
        $author = $_POST["author"];
        echo $title;

        
        $title = $title;
        $description = $author;
        
        //loads the xml and returns a simplexml object
        $rssxml = simplexml_load_file('rss.xml');
        $newChild = $rssxml->channel->addChild('item');
        $newChild->addChild('title', $title);
        $newChild->addChild('link', 'bookList.xml');
        $newChild->addChild('description', $description);
        file_put_contents('rss.xml', $rssxml->asXML());
    }*/


?>




