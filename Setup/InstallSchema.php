<?php

namespace SSS\ProductNews\Setup;


use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{

    /**
     * Installs DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $productNewsTable = $setup->getConnection()->newTable(
            $setup->getTable('sss_product_news')
        )->addColumn(
            'news_id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false, 'identity' => true, 'primary' => true, 'unsigned' => true],
            'Table primary key'
        )->addColumn(
            'product_id',
            Table::TYPE_INTEGER,
            null,
            ['nullable' => false, 'unsigned' => true],
            'Reference to `catalog_product_entity`.entity_id'
        )->addColumn(
            'title',
            Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'News title'
        )->addColumn(
            'news_body',
            Table::TYPE_TEXT,
            '256M',
            ['nullable' => false],
            'News article body'
        )->addForeignKey(
            $setup->getFkName(
                $setup->getTable('sss_product_news'),
                'news_id',
                $setup->getTable('catalog_product_entity'),
                'entity_id'
            ),
            'news_id',
            $setup->getTable('catalog_product_entity'),
            'entity_id',
            Table::ACTION_CASCADE
        );

        $setup->getConnection()->createTable($productNewsTable);

        $setup->endSetup();
    }
}