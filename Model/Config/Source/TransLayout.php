<?php
/**
 * Salesource LTD
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Salesource LTD license that is
 * available through the world-wide-web at this URL:
 * https://salesource.eu/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category  Salesource
 * @package   Salesource_Translate
 * @copyright 2020 Copyright (c) Salesource LTD <http://salesource.eu>
 */

namespace Salesource\Translate\Model\Config\Source;

/**
 * Class TransLayout
 * Implements class TransLayout object
 *
 */
class TransLayout implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * Returns options in array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'SIMPLE', 'label' => __('Simple Layout')],
            ['value' => 'VERTICLE', 'label' => __('Vertical Layout')],
            ['value' => 'HORIZONTAL', 'label' => __('Horizontal Layout')]
        ];
    }
}
