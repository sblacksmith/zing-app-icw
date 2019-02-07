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
 * ZingCarDetailController
 */
class ZingCarDetailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * zingCarDetailRepository
     * 
     * @var \Zingcarinfo\Zingcarinfo\Domain\Repository\ZingCarDetailRepository
     * @inject
     */
    protected $zingCarDetailRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $zingCarDetails = $this->zingCarDetailRepository->findAll();
        $this->view->assign('zingCarDetails', $zingCarDetails);
    }

    /**
     * action show
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail
     * @return void
     */
    public function showAction(\Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail)
    {
        $this->view->assign('zingCarDetail', $zingCarDetail);
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
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $newZingCarDetail
     * @return void
     */
    public function createAction(\Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $newZingCarDetail)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->zingCarDetailRepository->add($newZingCarDetail);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail
     * @ignorevalidation $zingCarDetail
     * @return void
     */
    public function editAction(\Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail)
    {
        $this->view->assign('zingCarDetail', $zingCarDetail);
    }

    /**
     * action update
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail
     * @return void
     */
    public function updateAction(\Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->zingCarDetailRepository->update($zingCarDetail);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail
     * @return void
     */
    public function deleteAction(\Zingcarinfo\Zingcarinfo\Domain\Model\ZingCarDetail $zingCarDetail)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->zingCarDetailRepository->remove($zingCarDetail);
        $this->redirect('list');
    }
}
