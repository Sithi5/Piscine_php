<?PHP
date_default_timezone_set("GMT");
$img = "../img/42.png";
$users = array('zaz' => 'jaimelespetitsponeys');
if ($_SERVER['PHP_AUTH_USER'] != "zaz" || $_SERVER['PHP_AUTH_PW'] != 'jaimelespetitsponeys')
{
	header('WWW-Authenticate: Basic realm="Espace membres"');
	header('HTTP/1.0 401 Unauthorized');
	header('date: ' . date('D, d M Y H:i:s T'));
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>" . "\n";
}
else
{
	echo "Bonjour Zaz<br />\n<img src='data:image/png;base64,";
	echo base64_encode($content = file_get_contents($img));
	echo "'>\n</body></html>\n";
}
?>
