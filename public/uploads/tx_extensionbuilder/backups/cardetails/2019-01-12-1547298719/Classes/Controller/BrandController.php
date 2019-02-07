<?php
namespace Cars\Cardetails\Controller;


/***
 *
 * This file is part of the "Car Details" Extension for TYPO3 CMS.
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
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Cars\Cardetails\Domain\Model\Brand $newBrand
     * @return void
     */
    public function createAction(\Cars\Cardetails\Domain\Model\Brand $newBrand)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->brandRepository->add($newBrand);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Cars\Cardetails\Domain\Model\Brand $brand
     * @ignorevalidation $brand
     * @return void
     */
    public function editAction(\Cars\Cardetails\Domain\Model\Brand $brand)
    {
        $this->view->assign('brand', $brand);
    }

    /**
     * action update
     * 
     * @param \Cars\Cardetails\Domain\Model\Brand $brand
     * @return void
     */
    public function updateAction(\Cars\Cardetails\Domain\Model\Brand $brand)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->brandRepository->update($brand);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Cars\Cardetails\Domain\Model\Brand $brand
     * @return void
     */
    public function deleteAction(\Cars\Cardetails\Domain\Model\Brand $brand)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->brandRepository->remove($brand);
        $this->redirect('list');
    }

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
     * @param \Cars\Cardetails\Domain\Model\Brand $brand
     * @return void
     */
    public function showAction(\Cars\Cardetails\Domain\Model\Brand $brand)
    {
        $this->view->assign('brand', $brand);
    }
}
