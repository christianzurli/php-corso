<?php
$dom = new DOMDocument('1', 'utf-8');
$root = $dom->createElement('root');
$dom->appendChild($root);
//var_dump($dom->saveXML());


$url = "https://www.sitepoint.com/feed";
$content = file_get_contents($url);
$filename = 'feed.xml';
$xml = simplexml_load_string($content);


foreach ($xml->channel->title as $item) {
    echo $item->title;
}

?>
