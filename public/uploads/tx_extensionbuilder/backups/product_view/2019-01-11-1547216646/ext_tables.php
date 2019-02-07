<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('product_view', 'Configuration/TypoScript', 'productview');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_productview_domain_model_product', 'EXT:product_view/Resources/Private/Language/locallang_csh_tx_productview_domain_model_product.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_productview_domain_model_product');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_productview_domain_model_brand', 'EXT:product_view/Resources/Private/Language/locallang_csh_tx_productview_domain_model_brand.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_productview_domain_model_brand');

    }
);
