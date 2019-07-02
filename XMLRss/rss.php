<?php



if(isset($_GET['query'])){

    $query = $_GET['query'];

    if($query == "Google"){
        $xml = "googlerss.xml";
    }
 $xmldoc = new DOMDocument();
$xmldoc->load($xml);


$chanel = $xmldoc->getElementsByTagName("channel")->item(0);

print_r($chanel->getElementsByTagName('title')->item(0)->childNodes->item(0)->nodeValue);
print_r($chanel->getElementsByTagName('link')->item(0)->childNodes->item(0)->nodeValue);
print_r($chanel->getElementsByTagName('description')->item(0)->childNodes->item(0)->nodeValue);

$items =$chanel->getElementsByTagName('item');

foreach($items as $key => $item){

    $name =$item->getElementsByTagName('title')->item(0)->nodeValue;
    $link = $item->getElementsByTagName('link')->item(0)->nodeValue; 
    print_r("<br /> <a href=$link>$key - $name</a>");
}


}


?>