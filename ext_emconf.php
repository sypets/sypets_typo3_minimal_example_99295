<?php

/** @var $_EXTKEY string */
$EM_CONF[$_EXTKEY] = [
    'title'            => 'sypets_example',
    'description'      => 'TYPO3 example',
    'version' => '0.0.1',
    'state'            => 'beta',
    'clearcacheonload' => 0,
    'author'           => 'Sybille Peters',
    'author_email'     => 'sypets@gmx.de',
    'constraints'      => [
        'depends' => [
            'typo3' => '11.5.19-11.5.99',
        ],
    ],
];
