<?php

namespace Ns\Afterbuy\Model\GetListerHistory;

use JMS\Serializer\Annotation as Serializer;
use Ns\Afterbuy\Model\Result as BaseResult;

/**
 * Class Result
 */
class Result extends BaseResult
{
    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ResultCount")
     * @var integer
     */
    protected $count;

    /**
     * @Serializer\Type("boolean")
     * @Serializer\SerializedName("HasMoreProducts")
     * @var bool
     */
    protected $hasMoreProducts;

    /**
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("ListedItems.LastHistoryID")
     * @var integer
     */
    protected $lastHistoryID;

    /**
     * @Serializer\Type("array<Ns\Afterbuy\Model\GetListerHistory\ListedItem>")
     * @Serializer\SerializedName("ListedItems")
     * @Serializer\XmlList(entry="ListedItem")
     * @var ListerHistory[]
     */
    protected $listedItems;

    /**
     * @return ListerHistory[]
     */
    public function getListedItems()
    {
        return $this->listedItems;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @return int
     */
    public function getLastHistoryID()
    {
        return $this->lastHistoryID;
    }

    /**
     * @return bool
     */
    public function isHasMoreProducts()
    {
        return $this->hasMoreProducts;
    }
	
}
