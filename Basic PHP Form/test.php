<?php

$elements = $_POST['elements'];

$str = "";
foreach($elements as $item) {
	if ($str == "")
     $str .= $item;
 	else $str .= ', ' . $item;
}

/* ------------ writing to new text file ------------*/

date_default_timezone_set('America/Denver');

$today = "burns_data/" . date("F j, Y, G.i.s a") . ".txt";

$ourFileName = $today;
$ourFileHandle = fopen($ourFileName, 'w') or die("can't open file");
fclose($ourFileHandle);

file_put_contents($ourFileName, $str);


/* ------------ writing to existing csv file ------------*/

$fs = fopen("file.csv","a");

fwrite($fs, "\n" . date("Ymd") . ", " . date("G:i:s") . ", ");

foreach ($elements as $fields) {
    fwrite($fs, $fields . ", ");
}

fclose($fs);

?>
