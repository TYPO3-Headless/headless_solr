<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Solr',
    'description' => 'This extension provides integration with solr to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Łukasz Uznański, Marcin Sągol',
    'author_email' => 'extensions@macopedia.com',
    'category' => 'fe',
    'internal' => '',
    'version' => '4.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'frontend' => '13.4.0-13.4.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '4.0.0-4.9.9'
        ]
    ],
];
