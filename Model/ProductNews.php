<?php

namespace SSS\ProductNews\Model;

use Magento\Framework\Model\AbstractModel;
use SSS\ProductNews\Api\Data\ProductNewsInterface;
use SSS\ProductNews\Model\ResourceModel\ProductNews as ProductNewsResource;

class ProductNews extends AbstractModel implements ProductNewsInterface
{

    /**
     * {@inheritdoc}
     */
    public function _construct()
    {
        parent::_construct();
        $this->_init(ProductNewsResource::class);
    }

    /**
     * @return int
     */
    public function getNewsId()
    {
        return $this->getData(self::NEWS_ID);
    }

    /**
     * @param int $newsId
     * @return $this
     */
    public function setNewsId($newsId)
    {
        $this->setData(self::NEWS_ID, $newsId);
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->getData(self::PRODUCT_ID);
    }

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->setData(self::PRODUCT_ID, $productId);
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->setData(self::TITLE, $title);
        return $this;
    }

    /**
     * @return string
     */
    public function getNewsBody()
    {
        return $this->getData(self::NEWS_BODY);
    }

    /**
     * @param string $newsBody
     * @return $this
     */
    public function setNewsBody($newsBody)
    {
        $this->setData(self::NEWS_BODY, $newsBody);
        return $this;
    }
}