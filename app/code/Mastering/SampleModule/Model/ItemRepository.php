<?php

namespace Mastering\SampleModule\Model;
use Mastering\SampleModule\Api\ItemRepositoryInterface;
use Mastering\SampleModule\Model\ResourceModel\Item\CollectionFactory;


class ItemRepository implements ItemRepositoryInterface
{
    private $collecitonFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collecitonFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collecitonFactory->create()->getItems();
    }
}