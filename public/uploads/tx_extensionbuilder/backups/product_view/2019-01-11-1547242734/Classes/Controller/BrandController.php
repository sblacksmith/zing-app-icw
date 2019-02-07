<?php
namespace Productview\ProductView\Controller;


/***
 *
 * This file is part of the "productview" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * BrandController
 */
class BrandController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $brands = $this->brandRepository->findAll();
        $this->view->assign('brands', $brands);
    }

    /**
     * action show
     * 
     * @param \Productview\ProductView\Domain\Model\Brand $brand
     * @return void
     */
    public function showAction(\Productview\ProductView\Domain\Model\Brand $brand)
    {
        $this->view->assign('brand', $brand);
    }
}
