<?php

use ArrayHandler\ArrayHandler;
use ArrayHandler\Strategy\ExplodeStrategy;
use ArrayHandler\Strategy\ImplodeStrategy;

$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];

$data2 = [
    'parent' => [
        'child' => [
            'field' => 1,
            'field2' => 2,
        ],
    ],
    'parent2' => [
        'child' => [
            'name' => 'test',
        ],
        'child2' => [
            'name' => 'test',
            'position' => 10,
        ],
    ],
    'parent3' => [
        'child3' => [
            'position' => 10,
        ],
    ],
];

$arrayHandler1 = new ArrayHandler($data1, new ExplodeStrategy);
$arrayHandler2 = new ArrayHandler($data2, new ImplodeStrategy);

echo("<pre>");
print_r($arrayHandler1->get());
echo("=============================\n");
print_r($arrayHandler2->get());
