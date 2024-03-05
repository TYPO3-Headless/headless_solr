<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Solr',
    'description' => 'This extension provides integration with solr to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.com',
    'category' => 'fe',
    'version' => '2.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'frontend' => '12.4.0-12.4.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '4.0.0-4.9.9'
        ]
    ],
];
