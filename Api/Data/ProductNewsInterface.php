<?php

namespace SSS\ProductNews\Api\Data;

/**
 * Interface ProductNewsInterface
 *
 * @package SSS\ProductNews\Api\Data
 */
interface ProductNewsInterface
{

    const ENTITY = 'sss_product_news';
    const ENTITY_ID = 'news_id';

    const NEWS_ID = 'news_id';
    const PRODUCT_ID = 'product_id';
    const TITLE = 'title';
    const NEWS_BODY = 'news_body';

    /**
     * @return int
     */
    public function getNewsId();

    /**
     * @param int $newsId
     * @return $this
     */
    public function setNewsId($newsId);

    /**
     * @return int
     */
    public function getProductId();

    /**
     * @param int $productId
     * @return $this
     */
    public function setProductId($productId);


    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     * @return $this
     */
    public function setTitle($title);

    /**
     * @return string
     */
    public function getNewsBody();

    /**
     * @param string $newsBody
     * @return $this
     */
    public function setNewsBody($newsBody);

}