<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Zingcarinfo.Zingcarinfo',
            'Zingcarinfo',
            'ZingCarInfo'
        );

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Zingcarinfo.Zingcarinfo',
            'Sellerinfo',
            'sellerInfo'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('zingcarinfo', 'Configuration/TypoScript', 'ZingCarInfo');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_zingcarinfo_domain_model_zingcardetail', 'EXT:zingcarinfo/Resources/Private/Language/locallang_csh_tx_zingcarinfo_domain_model_zingcardetail.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_zingcarinfo_domain_model_zingcardetail');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_zingcarinfo_domain_model_sellerinfo', 'EXT:zingcarinfo/Resources/Private/Language/locallang_csh_tx_zingcarinfo_domain_model_sellerinfo.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_zingcarinfo_domain_model_sellerinfo');

    }
);
