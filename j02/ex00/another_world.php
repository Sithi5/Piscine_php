#!/usr/bin/php
<?PHP
if ($argc < 2)
{
	return ;
}
echo preg_replace('/ +/',' ',
	preg_replace('[\t]', ' ', trim($argv[1], " \t"))) . "\n";
?>
