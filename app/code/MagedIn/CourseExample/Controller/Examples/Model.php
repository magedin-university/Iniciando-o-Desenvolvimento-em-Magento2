<?php

namespace MagedIn\CourseExample\Controller\Examples;

use Magento\Framework\App\ResponseInterface;

class Model extends \Magento\Framework\App\Action\Action
{
    
    /** @var \MagedIn\CourseExample\Api\Data\ExampleInterface */
    protected $model;
    
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \MagedIn\CourseExample\Api\Data\ExampleInterface $model
    ) {
        parent::__construct($context);
        $this->model = $model;
    }
    
    
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
        $this->model->load(1);
        $this->model->setRandom(rand(10000,99999));
        $this->model->save();
    }
}
