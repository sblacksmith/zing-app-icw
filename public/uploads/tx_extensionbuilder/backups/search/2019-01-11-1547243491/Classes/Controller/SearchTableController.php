<?php
namespace SearchCars\Search\Controller;


/***
 *
 * This file is part of the "Search" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * SearchTableController
 */
class SearchTableController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * searchTableRepository
     * 
     * @var \SearchCars\Search\Domain\Repository\SearchTableRepository
     * @inject
     */
    protected $searchTableRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $searchTables = $this->searchTableRepository->findAll();
        $this->view->assign('searchTables', $searchTables);
    }

    /**
     * action
     * 
     * @return void
     */
    public function Action()
    {
    }

    /**
     * action show
     * 
     * @param \SearchCars\Search\Domain\Model\SearchTable $searchTable
     * @return void
     */
    public function showAction(\SearchCars\Search\Domain\Model\SearchTable $searchTable)
    {
        $this->view->assign('searchTable', $searchTable);
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
     * @param \SearchCars\Search\Domain\Model\SearchTable $newSearchTable
     * @return void
     */
    public function createAction(\SearchCars\Search\Domain\Model\SearchTable $newSearchTable)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->searchTableRepository->add($newSearchTable);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \SearchCars\Search\Domain\Model\SearchTable $searchTable
     * @ignorevalidation $searchTable
     * @return void
     */
    public function editAction(\SearchCars\Search\Domain\Model\SearchTable $searchTable)
    {
        $this->view->assign('searchTable', $searchTable);
    }

    /**
     * action update
     * 
     * @param \SearchCars\Search\Domain\Model\SearchTable $searchTable
     * @return void
     */
    public function updateAction(\SearchCars\Search\Domain\Model\SearchTable $searchTable)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->searchTableRepository->update($searchTable);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \SearchCars\Search\Domain\Model\SearchTable $searchTable
     * @return void
     */
    public function deleteAction(\SearchCars\Search\Domain\Model\SearchTable $searchTable)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->searchTableRepository->remove($searchTable);
        $this->redirect('list');
    }
}
