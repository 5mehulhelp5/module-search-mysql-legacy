<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Swissup\SearchMysqlLegacy\Model\Config\Source;

/**
 * Search mode source model for multi-word query logic
 */
class SearchMode implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * OR mode - match any word (original Magento 2.3 behavior)
     */
    const MODE_OR = 'or';

    /**
     * AND mode - match all words (Elasticsearch-like behavior)
     */
    const MODE_AND = 'and';

    /**
     * Return array of options for admin select field
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => self::MODE_OR,
                'label' => __('OR - Match any word (Original Magento 2.3 behavior)')
            ],
            [
                'value' => self::MODE_AND,
                'label' => __('AND - Match all words (Recommended, like Elasticsearch)')
            ],
        ];
    }
}
