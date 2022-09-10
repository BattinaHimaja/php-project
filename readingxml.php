<?php
$xml=simplexml_load_file("readingxml.xml");
echo $xml->user[0]->name." is ".$xml->user[0]->age."<br>";
//reading all the users like array
foreach($xml->user as $user){
	echo $user->name." is ".$user->age."<br>";
}
//reading multid xml nested foreach
$xml=simplexml_load_file("writers.xml");
foreach($xml->writer as $writer){
	echo $writer->name." ".$writer->time."<br>";
	foreach($writer->book as $book){
		echo $book->name." ".$book->year."<br>";
	}
}

?>