<?php

namespace SSS\ProductNews\Ui\DataProvider\ProductNews\Listing;


use Magento\Backend\Model\UrlInterface;
use Magento\Catalog\Model\Locator\LocatorInterface;
use Magento\Catalog\Ui\DataProvider\Product\Form\Modifier\AbstractModifier;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\Search\ReportingInterface;
use Magento\Framework\Api\Search\SearchCriteriaBuilder;
use Magento\Framework\App\RequestInterface;
use Magento\Framework\Registry;

class DataProvider extends AbstractModifier
{

    /**
     * @var Registry
     */
    private $registry;
    private $urlBuilder;
    private $locator;

    /**
     * DataProvider constructor.
     * @param LocatorInterface $locator
     * @param UrlInterface $urlBuilder
     */
    public function __construct(
        LocatorInterface $locator,
        UrlInterface $urlBuilder
    ) {
        $this->locator = $locator;
        $this->urlBuilder = $urlBuilder;
    }

    public function getMeta()
    {
        dd($this->locator->getProduct());
        $meta = parent::getMeta();
        var_dump($meta);
        return $meta;
    }


}