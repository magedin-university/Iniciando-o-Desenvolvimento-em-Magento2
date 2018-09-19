<?php

namespace MagedIn\CourseExample\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table as DBTable;

class InstallSchema implements InstallSchemaInterface
{
    
    /**
     * @param SchemaSetupInterface   $setup
     * @param ModuleContextInterface $context
     *
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        
        /** @var \Magento\Framework\DB\Ddl\Table $table */
        $table = $setup->getConnection()->newTable(
            $setup->getTable('magedin_course_examples')
        )->addColumn(
            'id',
            DBTable::TYPE_SMALLINT,
            null,
            ['identity' => true, 'nullable' => false, 'primary' => true],
            'Table ID.'
        )->addColumn(
            'name',
            DBTable::TYPE_TEXT,
            256,
            ['nullable' => true],
            'Random name.'
        );
        
        $setup->getConnection()->createTable($table);
        
        $setup->endSetup();
    }
}
