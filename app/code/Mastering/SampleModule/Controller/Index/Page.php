<?php
namespace Mastering\SampleModule\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Page extends Action
{
    public function execute()
    {
        return $this->resultFactory->create()->setContents("How are you?");
    }
}


