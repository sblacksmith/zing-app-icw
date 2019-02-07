<?php
namespace Zing\Productoverview\Domain\Model;


/***
 *
 * This file is part of the "ProductOverview" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 
 *
 ***/
/**
 * Products
 */
class Products extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name of the product
     * 
     * @var string
     */
    protected $name = '';

    /**
     * price of the product
     * 
     * @var string
     */
    protected $price = '';

    /**
     * categories
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Zing\Productoverview\Domain\Model\Categories>
     * @cascade remove
     */
    protected $categories = null;

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the price
     * 
     * @return string $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param string $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Adds a Categories
     * 
     * @param \Zing\Productoverview\Domain\Model\Categories $category
     * @return void
     */
    public function addCategory(\Zing\Productoverview\Domain\Model\Categories $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Categories
     * 
     * @param \Zing\Productoverview\Domain\Model\Categories $categoryToRemove The Categories to be removed
     * @return void
     */
    public function removeCategory(\Zing\Productoverview\Domain\Model\Categories $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Zing\Productoverview\Domain\Model\Categories> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Zing\Productoverview\Domain\Model\Categories> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
    }
}
