#!/usr/bin/php
<?PHP
if ($argc < 2)
{
	return ;
}
if ($argv[1] == "moyenne")
{
	$option = 1;
}
else if ($argv[1] == "moyenne_user")
{
	$option = 2;
}
else if ($argv[1] == "ecart_moulinette")
{
	$option = 3;
}
else
{
	return ;
}
?>
