#!/usr/bin/php
<?PHP
$template = "A256user/A4id/A32ttyname/ipid/itype/ltv/A256host/A16pad";
$input = file_get_contents("/var/run/utmpx"); 
while ($input != "")
{
	date_default_timezone_set("Europe/Paris");
	$result = unpack($template, $input);
	if ($result['type'] == 7)
	{
		echo $result['user'] . "  ";
		echo $result['ttyname'] . "  ";
		echo strftime("%b %e %H:%M", $result['tv']) . "\n";
	}
	$input = substr($input, 628);
}
?>
