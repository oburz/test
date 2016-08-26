<?php
// Решение первого задания

$x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];
function getDump(array $array)
{
    $k = array_pop($array);

    if (!empty($array)) {
        return array(
            $k => getDump($array),
        );
    } else {
        return array($k => false);
    }

}

echo "<pre>";
print_r(getDump($x));
echo "</pre>";
