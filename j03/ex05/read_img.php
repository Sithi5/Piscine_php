<?PHP
date_default_timezone_set("GMT");
header('Date: ' . date('D, d M Y H:i:s T'));
$file = '../img/42.png';
header('content-type: image/png');
readfile($file);
exit ;
?>
