<?php
/**
 * The Page response model
 * @author    Ueli Kramer <ueli.kramer@comvation.com>
 * @copyright 2018 CardProcess GmbH
 * @since     v1.0
 */
namespace VRpay\Models\Response;

/**
 * Class Page
 * @package VRpay\Models\Response
 */
class Page extends \VRpay\Models\Request\Page
{
    protected $createdAt = 0;

    /**
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedDate($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
}
