<?php
include("_main.php");

$debut = microtime(true);
$nb_ite = 0;
$nb_comp = 0;

function isort($tab)
{
	$j = 1;
	$len = count($tab);
	global $nb_ite, $nb_comp;

	while($j != $len) {
		$i = $j - 1;
		$cmp = $tab[$j];
		$nb_comp++;
		while(($i > -1) && ($tab[$i] > $cmp)) {
			$tab[$i + 1] = $tab[$i];
			$i--;
		}
		$tab[$i + 1] = $cmp;
		$j++;
		$nb_ite++;
	}
	return $tab;
}

$param = take_args($argv);
$sort_tab = isort($param);
$fin = microtime(true);
$sec = round($fin - $debut, 2, PHP_ROUND_HALF_DOWN);
print_res($param, $sort_tab, $nb_comp, $nb_ite, $sec);