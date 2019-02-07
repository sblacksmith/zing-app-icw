<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'SearchCars.Search',
            'Search',
            'Search'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('search', 'Configuration/TypoScript', 'Search');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_search_domain_model_searchtable', 'EXT:search/Resources/Private/Language/locallang_csh_tx_search_domain_model_searchtable.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_search_domain_model_searchtable');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_search_domain_model_cardeatails', 'EXT:search/Resources/Private/Language/locallang_csh_tx_search_domain_model_cardeatails.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_search_domain_model_cardeatails');

    }
);
