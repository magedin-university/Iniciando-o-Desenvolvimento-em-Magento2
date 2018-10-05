<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\DB\Ddl\Table as DBTable;
use MagedIn\CourseExample\Api\Data\ExampleInterface;

class UpgradeSchema implements UpgradeSchemaInterface
{
    
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        if (version_compare($context->getVersion(), '2.0.1', '<')) {
            $this->createLastnameColumn($setup);
            $this->createRandomColumn($setup);
        }
        
        $setup->endSetup();
    }
    
    /**
     * @param SchemaSetupInterface $setup
     *
     * @return $this
     */
    private function createLastnameColumn(SchemaSetupInterface $setup)
    {
        $setup->getConnection()
            ->addColumn(
                $setup->getTable(ExampleInterface::TABLE),
                'lastname',
                [
                    'nullable' => false,
                    'type' => DBTable::TYPE_TEXT,
                    'size' => 256,
                    'comment' => 'Last name.'
                ]
            );
        
        return $this;
    }
    
    /**
     * @param SchemaSetupInterface $setup
     *
     * @return $this
     */
    private function createRandomColumn(SchemaSetupInterface $setup)
    {
        $setup->getConnection()
            ->addColumn(
                $setup->getTable(ExampleInterface::TABLE),
                'random',
                [
                    'nullable' => false,
                    'type' => DBTable::TYPE_TEXT,
                    'size' => 256,
                    'comment' => 'Random value.'
                ]
            );
        
        return $this;
    }
}
