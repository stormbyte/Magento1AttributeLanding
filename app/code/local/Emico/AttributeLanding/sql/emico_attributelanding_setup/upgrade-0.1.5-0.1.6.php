<?php
/**
 * @author Bram Gerritsen <bgerritsen@emico.nl>
 * @copyright (c) Emico 2018
 */

/* @var $installer Mage_Catalog_Model_Resource_Setup */
$installer = $this;

$installer->startSetup();

$connection = $installer->getConnection();
$table = $installer->getTable('emico_attributelanding/page');
if ($connection->isTableExists($table)) {

    if (!$connection->tableColumnExists($table, 'meta_title')) {
        $connection->addColumn($table, 'meta_title', [
            'type' => Varien_Db_Ddl_Table::TYPE_TEXT,
            'length' => 255,
            'nullable' => true,
            'comment' => 'Meta title',
        ]);
    }
}

$installer->endSetup();