<?php
namespace Zingcarinfo\Zingcarinfo\Controller;


/***
 *
 * This file is part of the "ZingCarInfo" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * SellerInfoController
 */
class SellerInfoController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * sellerInfoRepository
     * 
     * @var \Zingcarinfo\Zingcarinfo\Domain\Repository\SellerInfoRepository
     * @inject
     */
    protected $sellerInfoRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $sellerInfos = $this->sellerInfoRepository->findAll();
        $this->view->assign('sellerInfos', $sellerInfos);
    }

    /**
     * action show
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo
     * @return void
     */
    public function showAction(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo)
    {
        $this->view->assign('sellerInfo', $sellerInfo);
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
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $newSellerInfo
     * @return void
     */
    public function createAction(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $newSellerInfo)
    {
    
        $this->sellerInfoRepository->add($newSellerInfo);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo
     * @ignorevalidation $sellerInfo
     * @return void
     */
    public function editAction(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo)
    {
        $this->view->assign('sellerInfo', $sellerInfo);
    }

    /**
     * action update
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo
     * @return void
     */
    public function updateAction(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo)
    {
        $this->addFlashMessage('Updated Succesfully.');
        $this->sellerInfoRepository->update($sellerInfo);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo
     * @return void
     */
    public function deleteAction(\Zingcarinfo\Zingcarinfo\Domain\Model\SellerInfo $sellerInfo)
    {
        $this->addFlashMessage('Deleted Succesfully.');
        $this->sellerInfoRepository->remove($sellerInfo);
        $this->redirect('list');
    }
}
