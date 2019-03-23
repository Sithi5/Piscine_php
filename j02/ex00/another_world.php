#!/usr/bin/php
<?PHP
if ($argc < 2)
{
	return ;
}
echo preg_replace('/ +/',' ', preg_replace('[\t]', ' ', $argv[1])) . "\n";
?>
