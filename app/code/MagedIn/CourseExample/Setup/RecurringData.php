<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class RecurringData implements InstallDataInterface
{
    
    /**
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface   $context
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
    
        $bind = ['random' => rand(1000,9999)];
        $setup->getConnection()
            ->update(
                \MagedIn\CourseExample\Setup\InstallSchema::TABLE,
                $bind,
                'name = "Tiago"'
            );
    
        $setup->endSetup();
    }
}
