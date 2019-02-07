<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Zing.Productoverview',
            'Products',
            [
                'Products' => 'list, show',
                'Categories' => 'list'
            ],
            // non-cacheable actions
            [
                'Products' => '',
                'Categories' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    products {
                        iconIdentifier = productoverview-plugin-products
                        title = LLL:EXT:productoverview/Resources/Private/Language/locallang_db.xlf:tx_productoverview_products.name
                        description = LLL:EXT:productoverview/Resources/Private/Language/locallang_db.xlf:tx_productoverview_products.description
                        tt_content_defValues {
                            CType = list
                            list_type = productoverview_products
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'productoverview-plugin-products',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:productoverview/Resources/Public/Icons/user_plugin_products.svg']
			);
		
    }
);
