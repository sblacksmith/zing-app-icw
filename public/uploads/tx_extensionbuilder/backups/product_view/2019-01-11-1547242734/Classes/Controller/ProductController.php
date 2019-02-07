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
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     * 
     * @var \Productview\ProductView\Domain\Repository\ProductRepository
     * @inject
     */
    protected $productRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
    }

    /**
     * action show
     * 
     * @param \Productview\ProductView\Domain\Model\Product $product
     * @return void
     */
    public function showAction(\Productview\ProductView\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }

    /**
     * action edit
     * 
     * @param \Productview\ProductView\Domain\Model\Product $product
     * @ignorevalidation $product
     * @return void
     */
    public function editAction(\Productview\ProductView\Domain\Model\Product $product)
    {
        $this->view->assign('product', $product);
    }

    /**
     * action update
     * 
     * @param \Productview\ProductView\Domain\Model\Product $product
     * @return void
     */
    public function updateAction(\Productview\ProductView\Domain\Model\Product $product)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->productRepository->update($product);
        $this->redirect('list');
    }
}
