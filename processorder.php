
<?php
  // создание коротких имен переменных 
  setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%m');
$year = strftime('%Y');
$mon = iconv('windows-1251','utf-8',$mon); 

$mater = $_POST['mater'];
$format = $_POST['format'];
$num = $_POST['num']; 
  
  $totale = $mater + $format + $num;
?>

  