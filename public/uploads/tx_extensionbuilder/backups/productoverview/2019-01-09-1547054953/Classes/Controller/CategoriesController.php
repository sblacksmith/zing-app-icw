<?php
namespace Zing\Productoverview\Controller;


/***
 *
 * This file is part of the "ProductOverview" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * CategoriesController
 */
class CategoriesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoriesRepository->findAll();
        $this->view->assign('categories', $categories);
    }
}
