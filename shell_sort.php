<?php
include("_main.php");

$debut = microtime(true);
$nb_ite = 0;
$nb_comp = 0;

function shsort($tab)
{
	$gap = round(count($tab)/2);
	global $nb_ite, $nb_comp;

	while($gap > 0) {
		for($i = $gap; $i < count($tab);$i++) {
			$cmp = $tab[$i];
			$j = $i;
			while($j >= $gap && $tab[$j - $gap] > $cmp) {
				$nb_ite++;
				$tab[$j] = $tab[$j - $gap];
				$j -= $gap;
			}
			$tab[$j] = $cmp;
			$nb_comp++;
		}
		$gap = round($gap/2.2);
	}
	return $tab;
}

$param = take_args($argv);
$sort_tab = shsort($param);
$fin = microtime(true);
$sec = round($fin - $debut, 2, PHP_ROUND_HALF_DOWN);
print_res($param, $sort_tab, $nb_comp, $nb_ite, $sec);