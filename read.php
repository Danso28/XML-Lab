<?php
$url = 'Library.xml'; // xml file location with file name
if (file_exists($url)) {
    $xml = simplexml_load_file($url);
    print_r($xml);
}
 ?>
