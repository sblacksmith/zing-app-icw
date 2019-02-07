<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'SearchCars.Search',
            'Search',
            [
                'SearchTable' => 'list, show'
            ],
            // non-cacheable actions
            [
                'SearchTable' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    search {
                        iconIdentifier = search-plugin-search
                        title = LLL:EXT:search/Resources/Private/Language/locallang_db.xlf:tx_search_search.name
                        description = LLL:EXT:search/Resources/Private/Language/locallang_db.xlf:tx_search_search.description
                        tt_content_defValues {
                            CType = list
                            list_type = search_search
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'search-plugin-search',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:search/Resources/Public/Icons/user_plugin_search.svg']
			);
		
    }
);
