<?php
include("_main.php");

$debut = microtime(true);
$nb_ite = 0;
$nb_comp = 0;

function csort($tab)
{
	$gap = count($tab);
    $swap = true;
    global $nb_ite, $nb_comp;

    while ($gap > 1 || $swap) {
        if($gap > 1) {
            $gap /= 1.25;
        }
 		$swap = false;
		$i = 0;
		while($i + $gap < count($tab)) {
            $nb_comp++;
			if($tab[$i] > $tab[$i + $gap]){
                $cmp = $tab[$i];
                $tab[$i] = $tab[$i + $gap];
                $tab[$i + $gap] = $cmp;
                $swap = true;
                $nb_ite++;
			}
			$i++;
		}
	}
	return $tab;
}

$param = take_args($argv);
$sort_tab = csort($param);
$fin = microtime(true);
$sec = round($fin - $debut, 2, PHP_ROUND_HALF_DOWN);
print_res($param, $sort_tab, $nb_comp, $nb_ite, $sec);