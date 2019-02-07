<?php
namespace Zingcarinfo\Zingcarinfo\Domain\Repository;


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
 * The repository for ZingCarDetails
 */
class ZingCarDetailRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
	public function findBySearchTerm(string $searchTerm){
		$query=$this->createQuery();
		$query->matching(
		$query->logicalOr([
		   $query->like('carId','%'.$searchTerm.'%'),
		    $query->like('carBrand','%'.$searchTerm.'%'),
			 $query->like('carName','%'.$searchTerm.'%'),
			 $query->like('carPrice','%'.$searchTerm.'%'),
			 	 	 $query->like('fuelType','%'.$searchTerm.'%')
				 
			 ])
			 );
			 $result=$query->execute();
			 return $result;
	}
}
