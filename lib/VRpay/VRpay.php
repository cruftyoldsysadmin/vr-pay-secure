<?php
/**
 * The VRpay client API basic class file
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2018 CardProcess GmbH
 * @since     v1.0
 */
namespace VRpay;

/**
 * All interactions with the API can be done with an instance of this class.
 * @package VRpay
 */
class VRpay
{
    /**
     * @var Communicator The object for the communication wrapper.
     */
    protected $communicator;

    /**
     * Generates an API object to use for the whole interaction with VRpay.
     *
     * @param string $instance             The name of the VRpay instance
     * @param string $apiSecret            The API secret which can be found in the VRpay administration
     * @param string $communicationHandler The preferred communication handler.
     *                                     If nothing is defined the VRpay API will use the cURL communicator.
     */
    public function __construct($instance, $apiSecret, $communicationHandler = null)
    {
        if ($communicationHandler) {
            $this->communicator = new \VRpay\Communicator($instance, $apiSecret, $communicationHandler);
        } else {
            $this->communicator = new \VRpay\Communicator($instance, $apiSecret);
        }
    }

    /**
     * This method returns the version of the API communicator which is the API version used for this
     * application.
     *
     * @return string The version of the API communicator
     */
    public function getVersion()
    {
        return $this->communicator->getVersion();
    }

    /**
     * This magic method is used to call any method available in communication object.
     *
     * @param string $method The name of the method called.
     * @param array  $args   The arguments passed to the method call. There can only be one argument which is the model.
     *
     * @return \VRpay\Models\Response\Base[]|\VRpay\Models\Response\Base
     * @throws \VRpay\VRpayException The model argument is missing or the method is not implemented
     */
    public function __call($method, $args)
    {
        if (!$this->communicator->methodAvailable($method)) {
            throw new \VRpay\VRpayException('Method ' . $method . ' not implemented');
        }
        if (empty($args)) {
            throw new \VRpay\VRpayException('Argument model is missing');
        }
        $model = current($args);
        return $this->communicator->performApiRequest($method, $model);
    }
}
