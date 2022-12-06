<?php

defined('TYPO3') or die();

$columns = [

    'hide_subnavigation' => [
        'label' => 'Subnavigation',
        'l10n_mode' => 'exclude',
        'config' => [
            'type' => 'check',
            'default' => 0,
            'itemsProcFunc' => Sypets\SypetsExample\FormEngine\ItemsProcFuncs\ItemsProcFunc::class . '->getItemsForPagesHideSubnavigation',
            'items' => [
                [
                    'Option 1',
                    ''
                ],
                [
                    'Option 2',
                    ''
                ],
            ],
        ],
    ],
];

// Add new fields to pages:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $columns);


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    // table
    'pages',
    // field
    'hide_subnavigation',
    '',
    'after:title'

);
