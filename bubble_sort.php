<?php

include("_main.php");

$debut = microtime(true);
$nb_ite = 0;
$nb_comp = 0;

function bsort($tab)
{
    $len = count($tab);
    global $nb_ite, $nb_comp;

    for($i = 0; $i < $len - 1; $i++) {
		for($j = 0; $j < ($len - 1 - $i); $j++) {
            $nb_comp++;
			if ($tab[$j] > $tab[$j + 1] ) {
				$cmp = $tab[$j + 1];
				$tab[$j + 1] = $tab[$j];
                $tab[$j] = $cmp;
                $nb_ite++;
			}
		}
	}
	return $tab;
}

$param = take_args($argv);
$sort_tab = bsort($param);
$fin = microtime(true);
$sec = round($fin - $debut, 2, PHP_ROUND_HALF_DOWN);
print_res($param, $sort_tab, $nb_comp, $nb_ite, $sec);