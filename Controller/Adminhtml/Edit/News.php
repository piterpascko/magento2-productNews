<?php
/**
 * Created by Piter Pasko.
 * User: Piter Pasko
 * Date: 07.06.18
 * Time: 7:19
 */

namespace SSS\ProductNews\Controller\Adminhtml\Edit;


use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Element\UiComponentFactory;
use Magento\Framework\View\Element\UiComponentInterface;


class News extends \Magento\Framework\App\Action\Action
{

    /**
     * @var UiComponentFactory
     */
    private $uiComponentFactory;
    private $context;

    /**
     * News constructor.
     * @param Context $context
     * @param UiComponentFactory $componentFactory
     */
    public function __construct(Context $context, UiComponentFactory $componentFactory)
    {
        parent::__construct($context);
        $this->context = $context;
        $this->uiComponentFactory = $componentFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return void
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function execute()
    {
        $component = $this->uiComponentFactory->create('product_news_form');
        $this->prepareComponent($component);
        $this->_response->appendBody((string) $component->render());
        //dd('hellopoppy!');
    }


    private function prepareComponent(UiComponentInterface $component)
    {
        foreach ($component->getChildComponents() as $child) {
            $this->prepareComponent($child);
        }
        $component->prepare();
    }
}