<?php

namespace MagedIn\CourseExample\Model;

use MagedIn\CourseExample\Api\Data\ExampleInterface;
use Magento\Framework\Model\AbstractModel;

class Example extends AbstractModel implements ExampleInterface
{
    
    /** @var string */
    protected $_eventObject = 'example';
    
    /** @var string */
    protected $_eventPrefix = 'magedin_course_example';
    
    /**
     * This is different from the PHP __construct method.
     */
    protected function _construct()
    {
        $this->_init(\MagedIn\CourseExample\Model\ResourceModel\Example::class);
    }
    
    /**
     * @return string
     */
    public function getName()
    {
        return $this->getData(ExampleInterface::NAME);
    }
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        return $this->setData(ExampleInterface::NAME, $name);
    }
    
    /**
     * @return string
     */
    public function getLastname()
    {
        return $this->getData(ExampleInterface::LASTNAME);
    }
    
    /**
     * @param string $lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        return $this->setData(ExampleInterface::LASTNAME, $lastname);
    }
    
    /**
     * @return integer
     */
    public function getRandom()
    {
        return $this->getData(ExampleInterface::RANDOM);
    }
    
    /**
     * @param integer $number
     *
     * @return $this
     */
    public function setRandom($number)
    {
        return $this->setData(ExampleInterface::RANDOM, (integer) $number);
    }
}
