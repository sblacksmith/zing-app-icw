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
 * FuelTypeController
 */
class FuelTypeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
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
     * @param \Cars\Cardetails\Domain\Model\FuelType $newFuelType
     * @return void
     */
    public function createAction(\Cars\Cardetails\Domain\Model\FuelType $newFuelType)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fuelTypeRepository->add($newFuelType);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Cars\Cardetails\Domain\Model\FuelType $fuelType
     * @ignorevalidation $fuelType
     * @return void
     */
    public function editAction(\Cars\Cardetails\Domain\Model\FuelType $fuelType)
    {
        $this->view->assign('fuelType', $fuelType);
    }

    /**
     * action update
     * 
     * @param \Cars\Cardetails\Domain\Model\FuelType $fuelType
     * @return void
     */
    public function updateAction(\Cars\Cardetails\Domain\Model\FuelType $fuelType)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fuelTypeRepository->update($fuelType);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Cars\Cardetails\Domain\Model\FuelType $fuelType
     * @return void
     */
    public function deleteAction(\Cars\Cardetails\Domain\Model\FuelType $fuelType)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->fuelTypeRepository->remove($fuelType);
        $this->redirect('list');
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $fuelTypes = $this->fuelTypeRepository->findAll();
        $this->view->assign('fuelTypes', $fuelTypes);
    }

    /**
     * action show
     * 
     * @param \Cars\Cardetails\Domain\Model\FuelType $fuelType
     * @return void
     */
    public function showAction(\Cars\Cardetails\Domain\Model\FuelType $fuelType)
    {
        $this->view->assign('fuelType', $fuelType);
    }
}
