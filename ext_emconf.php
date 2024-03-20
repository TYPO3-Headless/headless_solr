<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Headless Solr',
    'description' => 'This extension provides integration with solr to output content from TYPO3 in JSON format.',
    'state' => 'stable',
    'author' => 'Łukasz Uznański',
    'author_email' => 'extensions@macopedia.com',
    'category' => 'fe',
    'internal' => '',
    'version' => '3.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.0.99-12.9.99',
            'frontend' => '11.0.99-12.9.99'
        ],
        'conflicts' => [],
        'suggests' => [
            'headless' => '2.0.0-4.9.9'
        ]
    ],
];
