#!/usr/bin/php
<?PHP
function	ft_split($text)
{
	$text = explode(' ', $text);
	$result = array_filter($text);
	sort($result);
	return ($result);
}

if ($argc < 2)
return ;
$result = array();
$result = ft_split($argv[1]);
$tmp = $result[0];
//if (count($result) > 1)
//{
//	$result[0] = $result[count($result) - 1];
//	$result[count($result) - 1] = $tmp;
//}
$i = count($result) - 1;
while ($i >= 0)
{
	echo "$result[$i]";
	if ($i - 1 >= 0)
	echo " ";
	$i--;
}
	echo "\n";
?>
