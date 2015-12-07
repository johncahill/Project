<?php
// Load the XML source
$xml = new DOMDocument;
$xml->load('cookbookList.xml');
$xsl = new DOMDocument;
$xsl->substituteEntities = true; 
$xsl->load('cookbookList.xsl');
// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl);
// attach the xsl rules
echo $proc->transformToXML($xml);
?>

