<?php

namespace Mastering\SampleModule\Controller\Adminhtml\Blog;

use Magento\Framework\Controller\ResultFactory;

class Blog extends \Magento\Backend\App\Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('This is new blog.');
        return $result;
        //return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}