<?php

namespace MagedIn\CourseExample\Controller\Examples;

use Magento\Framework\App\ResponseInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    
    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        echo 'It is working!!';
        die();
    }
}
