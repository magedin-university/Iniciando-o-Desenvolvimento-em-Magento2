<?php

namespace MagedIn\CourseExample\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use MagedIn\CourseExample\Api\Data\ExampleInterface;

class Example extends AbstractDb
{
    
    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ExampleInterface::TABLE, 'id');
    }
}
