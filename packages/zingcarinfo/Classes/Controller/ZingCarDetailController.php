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
   
 public function listAction(string $search='')
    {
		 $zingCarDetails = $this->zingCarDetailRepository->findAll();
        $zingCarDetails = $this->zingCarDetailRepository->findBySearchTerm($search);
        $this->view->assign('zingCarDetails', $zingCarDetails);
		$this->view->assign('search',$search);
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
        $this->addFlashMessage('Updated Successfully.');
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
        $this->addFlashMessage('Deleted Successfully.');
        $this->zingCarDetailRepository->remove($zingCarDetail);
        $this->redirect('list');
    }
}
