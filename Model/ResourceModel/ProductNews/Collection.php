<?php
/**
 * Created by Piter Pasko.
 * User: Piter Pasko
 * Date: 01.06.18
 * Time: 0:08
 */

namespace SSS\ProductNews\Model\ResourceModel\ProductNews;


use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use SSS\ProductNews\Model\ProductNews;
use SSS\ProductNews\Model\ResourceModel\ProductNews as ProductNewsResource;

class Collection extends AbstractCollection
{

    public function _construct()
    {
        parent::_construct();
        $this->_init(ProductNews::class, ProductNewsResource::class);
    }

}