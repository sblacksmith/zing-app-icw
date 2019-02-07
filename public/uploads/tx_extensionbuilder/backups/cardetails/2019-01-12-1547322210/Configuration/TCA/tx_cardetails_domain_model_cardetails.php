<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails',
        'label' => 'c_id',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'c_name,c_brand,color,fuel_type,seller',
        'iconfile' => 'EXT:cardetails/Resources/Public/Icons/tx_cardetails_domain_model_cardetails.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, c_id, c_name, c_brand, color, price, fuel_type, seller, get_brand, get_c_name, get_fuel_type, get_price, get_seller_details',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, c_id, c_name, c_brand, color, price, fuel_type, seller, get_brand, get_c_name, get_fuel_type, get_price, get_seller_details, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_cardetails_domain_model_cardetails',
                'foreign_table_where' => 'AND {#tx_cardetails_domain_model_cardetails}.{#pid}=###CURRENT_PID### AND {#tx_cardetails_domain_model_cardetails}.{#sys_language_uid} IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        0 => '',
                        1 => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime,int',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
                'behaviour' => [
                    'allowLanguageSynchronization' => true
                ]
            ],
        ],

        'c_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.c_id',
            'config' => [
                'type' => 'select',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'c_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.c_name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'c_brand' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.c_brand',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'color' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.color',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.price',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ]
        ],
        'fuel_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.fuel_type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'seller' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.seller',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'get_brand' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.get_brand',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cardetails_domain_model_brand',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'get_c_name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.get_c_name',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cardetails_domain_model_carname',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'get_fuel_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.get_fuel_type',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cardetails_domain_model_fueltype',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'get_price' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.get_price',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cardetails_domain_model_price',
                'minitems' => 0,
                'maxitems' => 1,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],
        ],
        'get_seller_details' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_domain_model_cardetails.get_seller_details',
            'config' => [
                'type' => 'inline',
                'foreign_table' => 'tx_cardetails_domain_model_sellerdetails',
                'foreign_field' => 'cardetails',
                'maxitems' => 9999,
                'appearance' => [
                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1
                ],
            ],

        ],
    
    ],
];
