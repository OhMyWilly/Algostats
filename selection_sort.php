<?php
include("_main.php");

$debut = microtime(true);
$nb_ite = 0;
$nb_comp = 0;

function ssort($tab)
{
    $len = count($tab);
    $i = 0;
    global $nb_ite, $nb_comp;

	while($i < $len - 1) {
		$min = $i;
		$cmp = $tab[$min];
		for($j = $i + 1; $j < $len; $j++) {
            $nb_comp++;
			if($tab[$j] < $cmp) {
				$min = $j;
				$cmp = $tab[$min];
			}
        }
		if($min != $i) {
			$tab[$min] = $tab[$i];
            $tab[$i] = $cmp;
            $nb_ite++;
		}
        $i++;
    }
    return $tab;
}

$param = take_args($argv);
$sort_tab = ssort($param);
$fin = microtime(true);
$sec = round($fin - $debut, 2, PHP_ROUND_HALF_DOWN);
print_res($param, $sort_tab, $nb_comp, $nb_ite, $sec);