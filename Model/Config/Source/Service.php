<?php

namespace Monogo\Smsapi\Model\Config\Source;

use Magento\Framework\Data\OptionSourceInterface;

/**
 * Service source model
 *
 * @category SMSAPI
 * @package  Monogo|SMSAPI
 * @author   Paweł Detka <pawel.detka@monogo.pl>
 */
class Service implements OptionSourceInterface
{
    /**
     * @var array
     */
    protected $optionArray = [];

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        if (empty($this->optionArray)) {
            $this->optionArray = [['value' => 'pl', 'label' => __('SMSAPI.PL')], ['value' => 'com', 'label' => __('SMSAPI.COM')]];
        }
        return $this->optionArray;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        $optionArray = [];
        foreach ($this->toOptionArray() as $option) {
            $optionArray[$option['value']] = $option['label'];
        }
        return $optionArray;
    }
}