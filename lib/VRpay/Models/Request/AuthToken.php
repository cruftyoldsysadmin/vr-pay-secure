<?php
/**
 * The AuthToken request model
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2018 CardProcess GmbH
 * @since     v1.0
 */
namespace VRpay\Models\Request;

/**
 * Class AuthToken
 * @package VRpay\Models\Request
 */
class AuthToken extends \VRpay\Models\Base
{
    protected $userId = 0;

    /**
     * The user id of the user you want an auth token for
     * 
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the user id you would like to get an auth token for
     * 
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \VRpay\Models\Response\AuthToken();
    }
}
