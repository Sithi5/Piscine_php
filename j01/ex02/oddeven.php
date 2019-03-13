#!/usr/bin/php
<?php
$input = 1;
while ($input)
{
	echo "Entrez un nombre: ";
	$input = rtrim(fgets(STDIN));
	if (!$input)
	{
		echo "^D" . "\n";
		break ;
	}
	if (!is_numeric($input))
	{
		echo "'" . $input . "' n'est pas un chiffre" . "\n";
	}
	else if ($input % 2 == 0)
	{
		echo "Le chiffre " . $input . " est Pair" . "\n";
	}
	else
		echo "Le chiffre " . $input . " est Impair" . "\n";
}
?>
