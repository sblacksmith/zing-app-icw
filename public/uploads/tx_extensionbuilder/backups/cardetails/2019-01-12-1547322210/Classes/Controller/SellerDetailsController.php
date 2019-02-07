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
 * SellerDetailsController
 */
class SellerDetailsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sellerDetails = $this->sellerDetailsRepository->findAll();
        $this->view->assign('sellerDetails', $sellerDetails);
    }

    /**
     * action show
     * 
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails
     * @return void
     */
    public function showAction(\Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails)
    {
        $this->view->assign('sellerDetails', $sellerDetails);
    }

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
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $newSellerDetails
     * @return void
     */
    public function createAction(\Cars\Cardetails\Domain\Model\SellerDetails $newSellerDetails)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sellerDetailsRepository->add($newSellerDetails);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails
     * @ignorevalidation $sellerDetails
     * @return void
     */
    public function editAction(\Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails)
    {
        $this->view->assign('sellerDetails', $sellerDetails);
    }

    /**
     * action update
     * 
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails
     * @return void
     */
    public function updateAction(\Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sellerDetailsRepository->update($sellerDetails);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails
     * @return void
     */
    public function deleteAction(\Cars\Cardetails\Domain\Model\SellerDetails $sellerDetails)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->sellerDetailsRepository->remove($sellerDetails);
        $this->redirect('list');
    }
}
