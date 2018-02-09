<?php
/**
 * The signatureCheck request model
 * @author    CardProcess GmbH
 * @copyright 2018 CardProcess GmbH
 * @since     v1.0
 */
namespace VRpay\Models\Request;

/**
 * Class SignatureCheck
 * @package VRpay\Models\Request
 */
class SignatureCheck extends \VRpay\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \VRpay\Models\Response\SignatureCheck();
    }
}
