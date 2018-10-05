<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use MagedIn\CourseExample\Api\Data\ExampleInterface;

class InstallData implements InstallDataInterface
{
    
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface   $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        $data = [
            'name' => 'Tiago',
            'lastname' => 'Sampaio',
            'random' => 1
        ];
    
        $setup->getConnection()->insert(ExampleInterface::TABLE, $data);
        
        $setup->endSetup();
    }
}
