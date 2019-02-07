<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Cars.Cardetails',
            'Cardetails',
            [
                'CarDetails' => 'list, show, new, create, edit, update, delete',
                'SellerDetails' => 'list, show, new, create, edit, update, delete',
                'Brand' => 'new, create, edit, update, delete',
                'CarName' => 'new, create, edit, update, delete',
                'FuelType' => 'new, create, edit, update, delete',
                'Price' => 'new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'CarDetails' => 'create, update, delete',
                'SellerDetails' => 'create, update, delete',
                'Brand' => 'create, update, delete',
                'CarName' => 'create, update, delete',
                'FuelType' => 'create, update, delete',
                'Price' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    cardetails {
                        iconIdentifier = cardetails-plugin-cardetails
                        title = LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_cardetails.name
                        description = LLL:EXT:cardetails/Resources/Private/Language/locallang_db.xlf:tx_cardetails_cardetails.description
                        tt_content_defValues {
                            CType = list
                            list_type = cardetails_cardetails
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'cardetails-plugin-cardetails',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:cardetails/Resources/Public/Icons/user_plugin_cardetails.svg']
			);
		
    }
);
