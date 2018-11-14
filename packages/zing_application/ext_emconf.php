<?php

/**
 * Extension Manager/Repository config file for ext "zing_application".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'zing-application',
    'description' => 'Second hand cars',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '10.0.0-10.0.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversity\\ZingApplication\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lakshmi Manjari Alapati',
    'author_email' => 'jlmanjari@gmail.com',
    'author_company' => 'Hof University',
    'version' => '1.0.0',
];
