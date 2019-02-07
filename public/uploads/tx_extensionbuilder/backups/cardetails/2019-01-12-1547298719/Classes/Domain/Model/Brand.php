<?php
namespace Cars\Cardetails\Domain\Model;


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
 * Brand
 */
class Brand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * bId
     * 
     * @var int
     */
    protected $bId = 0;

    /**
     * bName
     * 
     * @var string
     */
    protected $bName = '';

    /**
     * Returns the bId
     * 
     * @return int $bId
     */
    public function getBId()
    {
        return $this->bId;
    }

    /**
     * Sets the bId
     * 
     * @param int $bId
     * @return void
     */
    public function setBId($bId)
    {
        $this->bId = $bId;
    }

    /**
     * Returns the bName
     * 
     * @return string $bName
     */
    public function getBName()
    {
        return $this->bName;
    }

    /**
     * Sets the bName
     * 
     * @param string $bName
     * @return void
     */
    public function setBName($bName)
    {
        $this->bName = $bName;
    }
}
