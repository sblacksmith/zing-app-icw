<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Zingcarinfo.Zingcarinfo',
            'Zingcarinfo',
            [
                'ZingCarDetail' => 'list, show, new, create, edit, update, delete',
                'SellerInfo' => 'list, show, new, create, edit, update, delete'
            ],
            // non-cacheable actions
            [
                'ZingCarDetail' => 'create, update, delete',
                'SellerInfo' => 'create, update, delete'
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    zingcarinfo {
                        iconIdentifier = zingcarinfo-plugin-zingcarinfo
                        title = LLL:EXT:zingcarinfo/Resources/Private/Language/locallang_db.xlf:tx_zingcarinfo_zingcarinfo.name
                        description = LLL:EXT:zingcarinfo/Resources/Private/Language/locallang_db.xlf:tx_zingcarinfo_zingcarinfo.description
                        tt_content_defValues {
                            CType = list
                            list_type = zingcarinfo_zingcarinfo
                        }
                    }
                }
                show = *
            }
       }'
    );
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		
			$iconRegistry->registerIcon(
				'zingcarinfo-plugin-zingcarinfo',
				\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
				['source' => 'EXT:zingcarinfo/Resources/Public/Icons/user_plugin_zingcarinfo.svg']
			);
		
    }
);
