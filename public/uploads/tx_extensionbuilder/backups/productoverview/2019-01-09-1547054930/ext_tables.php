<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Zing.Productoverview',
            'Products',
            'Products'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('productoverview', 'Configuration/TypoScript', 'ProductOverview');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_productoverview_domain_model_products', 'EXT:productoverview/Resources/Private/Language/locallang_csh_tx_productoverview_domain_model_products.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_productoverview_domain_model_products');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_productoverview_domain_model_categories', 'EXT:productoverview/Resources/Private/Language/locallang_csh_tx_productoverview_domain_model_categories.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_productoverview_domain_model_categories');

    }
);
