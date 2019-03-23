#!/usr/bin/php
<?PHP

function	ft_error($error)
{
	if ($error == 1)
	{
		echo "Wrong Format\n";
		return ;
	}
}

function	ft_is_day($elem)
{
	$day = array("lundi", "mardi", "mercredi", "jeudi", "vendredi"
	, "samedi", "dimanche");
	$i = 0;
	while ($i < count($day))
	{
		if (!strcmp($day[$i], $elem))
			return (1);
		$i++;
	}
	return (0);
}

function	ft_is_day_num($elem)
{
	if (!is_numeric($elem))
	{
		return (0);
	}
	if ($elem > 12 || $elem < 1)
	{
		return (0);
	}
	return (1);
}

function	ft_is_month($elem)
{
	$day = array("janvier", "fevrier", "mars", "avril", "mai", "juin"
	, "juillet", "aout", "septembre", "octobre", "novembre", "decembre");
	$i = 0;
	while ($i < count($day))
	{
		if (!strcmp($day[$i], $elem))
			return ($i + 1);
		$i++;
	}
	return (0);
}


function	ft_is_year($elem)
{
	if (!is_numeric($elem))
	{
		return (0);
	}
	return (1);
}


function	ft_is_time_tab($elem)
{
	$timetab = explode(":", $elem);
	if (count($timetab) != 3)
	{
		return (0);
	}
	foreach($timetab as $elem)
	{
		if (!is_numeric($elem))
		{
			return (0);
		}
	}
	if ($timetab[0] > 23 || $timetab[0] < 0)
	{
		return (0);
	}
	if ($timetab[1] > 59 || $timetab[0] < 0)
	{
		return (0);
	}
	if ($timetab[2] > 59 || $timetab[0] < 0)
	{
		return (0);
	}
	return (1);
}

if ($argc != 2)
{
	return ;
}

$tab = explode(" ", strtolower($argv[1]));
if (count($tab) != 5)
{
	return(ft_error(1));
}
$Format = 0;
foreach($tab as $elem)
{
	if (ft_is_day($elem) && $Format % 10 != 1)
	{
		$Format += 1;
		$day = $elem;
	}
	else if (ft_is_day_num($elem))
	{
		$Format += 10;
		$daynum = $elem;
	}
	else if (ft_is_month($elem))
	{
		$Format += 100;
		$month = ft_is_month($elem);
	}
	else if (ft_is_year($elem) && ($Format / 1000 % 10 != 1))
	{
		$Format += 1000;
		$year = $elem;
	}
	else if (ft_is_time_tab($elem))
	{
		$Format += 10000;
		$timetab = explode(":", $elem);
	}
}
if ($Format != 11111)
{
	return (ft_error(1));
}
date_default_timezone_set("Europe/Paris");
echo (mktime($timetab[0], $timetab[1], $timetab[2], $month, $daynum, $year));
echo "\n";
?>
