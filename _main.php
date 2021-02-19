<?php

function take_args($arg)
{
    if (!$arg[1] || $arg[2]) {
        exit("Bad parameters!\n");
    }
    $str = explode(';', $arg[1]);
    foreach ($str as $element) {
        if (!is_numeric($element)) {
            exit("Bad parameters!\n");
        }
    }
    return $str;
}

function print_tab($tab) {
    $len = count($tab);
    foreach($tab as $key => $nb) {
        if($key == ($len - 1)) {
                echo("$nb");
        } else {
            echo("$nb;");
        }
    }
}

function print_res($tab, $sort_tab, $nb_comp, $nb_ite, $sec)
{
    echo "Série : ";
    print_tab($tab);
    echo "\nRésultat : ";
    print_tab($sort_tab);
    echo "\nNb de comparaison : $nb_comp";
    echo "\nNb d'itération : $nb_ite";
    echo "\nTemps (sec) : $sec";
    echo "\n";
}