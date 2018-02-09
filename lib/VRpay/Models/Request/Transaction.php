<?php

/**
 * Transaction request model
 *
 * @copyright   2018 CardProcess GmbH
 * @author      CardProcess GmbH
 */
namespace VRpay\Models\Request;

/**
 * Transaction class
 *
 * @package VRpay\Models\Request
 */
class Transaction extends \VRpay\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \VRpay\Models\Response\Transaction();
    }
}
