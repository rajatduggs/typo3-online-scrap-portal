<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer',
        'label' => 'customer_id',
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
        'searchFields' => 'customer_id,name,email,login_type,registration_key',
        'iconfile' => 'EXT:online_scrap_app/Resources/Public/Icons/tx_onlinescrapapp_domain_model_customer.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, customer_id, name, email, password, login_type, status, registration_key, customer_address',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, customer_id, name, email, password, login_type, status, registration_key, customer_address, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
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
                'foreign_table' => 'tx_onlinescrapapp_domain_model_customer',
                'foreign_table_where' => 'AND {#tx_onlinescrapapp_domain_model_customer}.{#pid}=###CURRENT_PID### AND {#tx_onlinescrapapp_domain_model_customer}.{#sys_language_uid} IN (-1,0)',
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

        'customer_id' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.customer_id',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'email' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.email',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,email,required'
            ]
        ],
        'password' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.password',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'nospace,password,required'
            ]
        ],
        'login_type' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.login_type',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'status' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.status',
            'config' => [
                'type' => 'input',
                'size' => 4,
                'eval' => 'int,required'
            ]
        ],
        'registration_key' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.registration_key',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
            ],
        ],
        'customer_address' => [
            'exclude' => true,
            'label' => 'LLL:EXT:online_scrap_app/Resources/Private/Language/locallang_db.xlf:tx_onlinescrapapp_domain_model_customer.customer_address',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_onlinescrapapp_domain_model_customeraddress',
                'MM' => 'tx_onlinescrapapp_customer_customeraddress_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'fieldControl' => [
                    'editPopup' => [
                        'disabled' => false,
                    ],
                    'addRecord' => [
                        'disabled' => false,
                    ],
                    'listModule' => [
                        'disabled' => true,
                    ],
                ],
            ],
            
        ],
    
    ],
];
