<?php

function linklist($filename,$prevstudents){

$delim=":";
$number=file("accounts/".$filename);
$numberRecs=count($number);
$fh=fopen('accounts/'.$filename,'r') or die("can't open: $php_errormsg");
for($i=0; $i<$numberRecs;$i++){
	$s=fgets($fh,1024);
	$fields=explode($delim,$s);
	$href=strtolower(substr($fields[1],0,1).$fields[2]);
	$output=$fields[2].", ".$fields[1];
	print "<a href='".$prevstudents.$href."'>".$output."</a><br />";
}
fclose($fh) or die("Can't close: $php_errormsg");

}

function previouslinklist($filename,$prevstudents){

$delim=":";
$number=file("accounts/".$filename);
$numberRecs=count($number);
$fh=fopen('accounts/'.$filename,'r') or die("can't open: $php_errormsg");
for($i=0; $i<$numberRecs;$i++){
	$s=fgets($fh,1024);
	$fields=explode($delim,$s);
	$href=strtolower(substr($fields[1],0,1).$fields[2]);
	$output=$fields[2].", ".$fields[1];
	print "<a href='/previous/".$prevstudents.$href."'>".$output."</a><br />";
}
fclose($fh) or die("Can't close: $php_errormsg");

}

?>
