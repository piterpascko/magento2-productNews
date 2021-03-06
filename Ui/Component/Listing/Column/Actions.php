<?php

namespace SSS\ProductNews\Ui\Component\Listing\Column;


use Magento\Ui\Component\Listing\Columns\Column;

class Actions extends Column
{
    /**
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        $dataSource = parent::prepareDataSource($dataSource);

        if (empty($dataSource['data']['items'])) {
            return $dataSource;
        }

        foreach ($dataSource['data']['items'] as &$item) {
            $item[$this->getData('name')]['edit'] = [
                'href' => $this->context->getUrl(
                    'product/news/edit',
                    ['news_id' => $item['news_id'], 'product_id' => $item['product_id']]
                ),
                'label' => __('Edit'),
                'hidden' => false,
            ];
        }

        return $dataSource;
    }
}