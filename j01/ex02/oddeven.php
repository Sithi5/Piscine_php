#!/usr/bin/php
<?PHP
$input = "";
echo "Entrez un nombre: ";
while (fscanf(STDIN, "%s\n", $input))
{
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
	echo "Entrez un nombre: ";
	$input = "";
}
	echo "^D" . "\n";
?>
