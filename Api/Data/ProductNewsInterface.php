<?php

namespace SSS\ProductNews\Api\Data;

/**
 * Interface ProductNewsInterface
 *
 * @package SSS\ProductNews\Api\Data
 */
interface ProductNewsInterface
{

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
}