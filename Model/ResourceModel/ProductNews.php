<?php
/**
 * Created by Piter Pasko.
 * User: Piter Pasko
 * Date: 01.06.18
 * Time: 0:05
 */

namespace SSS\ProductNews\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use SSS\ProductNews\Api\Data\ProductNewsInterface;

class ProductNews extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        parent::_construct();
        $this->_init(ProductNewsInterface::ENTITY, ProductNewsInterface::ENTITY_ID);
    }
}