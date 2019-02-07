<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Cars.Cardetails',
            'Cardetails',
            'CarDetails'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('cardetails', 'Configuration/TypoScript', 'Car Details');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardetails_domain_model_cardetails', 'EXT:cardetails/Resources/Private/Language/locallang_csh_tx_cardetails_domain_model_cardetails.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardetails_domain_model_cardetails');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardetails_domain_model_sellerdetails', 'EXT:cardetails/Resources/Private/Language/locallang_csh_tx_cardetails_domain_model_sellerdetails.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardetails_domain_model_sellerdetails');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardetails_domain_model_brand', 'EXT:cardetails/Resources/Private/Language/locallang_csh_tx_cardetails_domain_model_brand.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardetails_domain_model_brand');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardetails_domain_model_carname', 'EXT:cardetails/Resources/Private/Language/locallang_csh_tx_cardetails_domain_model_carname.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardetails_domain_model_carname');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardetails_domain_model_fueltype', 'EXT:cardetails/Resources/Private/Language/locallang_csh_tx_cardetails_domain_model_fueltype.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardetails_domain_model_fueltype');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_cardetails_domain_model_price', 'EXT:cardetails/Resources/Private/Language/locallang_csh_tx_cardetails_domain_model_price.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_cardetails_domain_model_price');

    }
);
