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
 * CarDetailsController
 */
class CarDetailsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * carDetailsRepository
     * 
     * @var \Cars\Cardetails\Domain\Repository\CarDetailsRepository
     * @inject
     */
    protected $carDetailsRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $carDetails = $this->carDetailsRepository->findAll();
        $this->view->assign('carDetails', $carDetails);
    }

    /**
     * action show
     * 
     * @param \Cars\Cardetails\Domain\Model\CarDetails $carDetails
     * @return void
     */
    public function showAction(\Cars\Cardetails\Domain\Model\CarDetails $carDetails)
    {
        $this->view->assign('carDetails', $carDetails);
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
     * @param \Cars\Cardetails\Domain\Model\CarDetails $newCarDetails
     * @return void
     */
    public function createAction(\Cars\Cardetails\Domain\Model\CarDetails $newCarDetails)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carDetailsRepository->add($newCarDetails);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Cars\Cardetails\Domain\Model\CarDetails $carDetails
     * @ignorevalidation $carDetails
     * @return void
     */
    public function editAction(\Cars\Cardetails\Domain\Model\CarDetails $carDetails)
    {
        $this->view->assign('carDetails', $carDetails);
    }

    /**
     * action update
     * 
     * @param \Cars\Cardetails\Domain\Model\CarDetails $carDetails
     * @return void
     */
    public function updateAction(\Cars\Cardetails\Domain\Model\CarDetails $carDetails)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carDetailsRepository->update($carDetails);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Cars\Cardetails\Domain\Model\CarDetails $carDetails
     * @return void
     */
    public function deleteAction(\Cars\Cardetails\Domain\Model\CarDetails $carDetails)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->carDetailsRepository->remove($carDetails);
        $this->redirect('list');
    }
}
