<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

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
    
        $setup->getConnection()->insert(\MagedIn\CourseExample\Setup\InstallSchema::TABLE, $data);
        
        $setup->endSetup();
    }
}
