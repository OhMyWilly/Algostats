# AlgoStats

Algostats est un projet de Maths pour comparer différentes manière de trier des chaines de nombres.

## Usage

USE:
        php SORT "ARRAY"

    SORT:   fichier php

    ARRAY:  tableau de nombres au format "a;b;c;d"

    EXEMPLE:    php insertion_sort.php "1;-2;3.5;4"

## Insertion Sort

Le tri à insertion est un algorithme de tri simple qui tri un tableau case par case. C'est ce qui fait de ce tri un tri peu efficace sur des grands tableaux contrairement à d'autres algorithmes comme le tri rapide ou le tri à fusion.

## Selection Sort

Le tri à sélection est un algorithme qui sélectionne le plus petit élément du tableau à chaque itération et le positionne au début du tableau.

## Bubble Sort

Le tri à bulle est un algorithme qui compare les case adjacente et qui les échange si elles ne sont pas dans le bon ordre.

## Shell Sort

Le tri de shell est un algorithme qui tri les élements éloigné de n position et qui réduit cette valeur n jusqu'a arrivé à 1 ce qui équivaut au tri à sélection. C'est pourquoi ce sont deux méthodes de tri très similaire.

## Merge Sort

Le tri à fusion est un algorithme basé sur le principe de Divide and Conquer. Ce principe est le suivant, on divise un problème en plusieurs sous-problèmes. Quand chaque sous problèmes est résolu, on les fusiones pour résoudre le problème initial.

## Quick Sort

Le tri rapide est un algorithme lui aussi basé sur le Divide and Conquer où on divise le problème en sous-problèmes et chaque sous-problèmes et appelé récursivement pour trié les élements du tableau.

## Comb Sort

Le tri peigne est une amélioration du tri à bulle qui compare toujours les valeurs adjacentes ce qui le rend lent sur de grosses chaines car chaque inversion sont faites une par une. Le tri peigne va lui utiliser des espacements supérieur à 1. Il commence avec une grosse valeur et diminue de 1.3 jusqu'à arrivé à 1.

## Benchmark

### Liste courtes (1000)

|        Tris        | Insertion | Selection |  Bubble  |   Shell   |   Comb   |
|:------------------:|-----------|-----------|:--------:|-----------|:--------:|
| Temps(en secondes) | 0.02      | 0.03      | 0.04     | 0.001     | 0.001    |
|      Itération     | 999       | 990       | 250076   | 6492      | 4241     |
|     Comparaison    | 999       | 499500    | 499500   | 8084      | 27019    |

### Liste longues (10000)

|        Tris        | Insertion | Selection |  Bubble  |   Shell   |   Comb   |
|:------------------:|-----------|-----------|:--------:|-----------|:--------:|
| Temps(en secondes) | 1.62      | 2.67      | 4.15     | 0.03      | 0.04     |
|      Itération     | 9999      | 9992      | 250076   | 106064    | 58647    |
|     Comparaison    | 9999      | 4995000   | 49995000 | 110833    | 380020   |


## Conclusion

On peut voir que pour des tris simples ou ne comprennant que peu de nombres à trier, tous les tris sont aussi efficaces les uns que les autres avec de faibles différences de temps entre les tris de shell et à peigne par rapport aux autres mais que ces différences sont assez faibles alors qu'il y a beaucoup plus d'éxécution que ce soit pour comparer ou pour échanger les cases.
Cependant, dès lors que l'on passe à des chaines comprenant plus d'éléments à trier, les tris basiques comme le tri à insertion ou a sélection sont beaucoup moins rapides que les tris de shell ou à peigne qui peut s'expliquer par le fait que ces tris vont, contrairement aux autres, faire des comparaisons avec des valeurs éloignés et non case par case. Ce qui améliore grandement leurs optimisation et leurs rapidité d'éxécution.

### Environnement de test

J'ai éffectué ces test sur une Machine Virtuelle sous Ubuntu avec 8Go de RAM, elle même sur un Pc sous Windows 10 X64 avec 16Go de RAM et d'un processeur de 4Ghz.