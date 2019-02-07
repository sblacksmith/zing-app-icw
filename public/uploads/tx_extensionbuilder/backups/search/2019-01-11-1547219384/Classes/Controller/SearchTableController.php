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
     * action show
     * 
     * @param \SearchCars\Search\Domain\Model\SearchTable $searchTable
     * @return void
     */
    public function showAction(\SearchCars\Search\Domain\Model\SearchTable $searchTable)
    {
        $this->view->assign('searchTable', $searchTable);
    }
}
