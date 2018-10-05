<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use MagedIn\CourseExample\Api\Data\ExampleInterface;

class Recurring implements InstallSchemaInterface
{
    
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
    
        $bind = ['random' => rand(1000,9999)];
        $setup->getConnection()->update(ExampleInterface::TABLE, $bind);
        
        $setup->endSetup();
    }
}
