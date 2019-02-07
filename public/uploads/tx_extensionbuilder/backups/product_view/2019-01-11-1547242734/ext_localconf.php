<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Productview.ProductView',
            'Productview',
            [
                'Product' => 'list, show, edit, update',
                'Brand' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Product' => 'update',
                'Brand' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    productview {
                        iconIdentifier = product_view-plugin-productview
                        title = LLL:EXT:product_view/Resources/Private/Language/locallang_db.xlf:tx_product_view_productview.name
                        description = LLL:EXT:product_view/Resources/Private/Language/locallang_db.xlf:tx_product_view_productview.description
                        tt_content_defValues {
                            CType = list
                            list_type = productview_productview
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'product_view-plugin-productview',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:product_view/Resources/Public/Icons/user_plugin_productview.svg']
			);
		
    }
);
