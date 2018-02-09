<?php

/**
 * Transaction response model
 *
 * @copyright   2018 CardProcess GmbH
 * @author      CardProcess GmbH
 */
namespace VRpay\Models\Response;

/**
 * Transaction class
 *
 * @package VRpay\Models\Response
 */
class Transaction extends \VRpay\Models\Request\Transaction
{

    private $uuid;
    private $time;
    private $status;
    private $lang;
    private $psp;


    /**
     * @access  public
     * @param   string  $uuid
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @access  public
     * @param   string  $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @access  public
     * @param   string  $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @access  public
     * @param   string  $lang
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @access  public
     * @param   string  $psp
     */
    public function setPsp($psp)
    {
        $this->psp = $psp;
    }

    /**
     * @access  public
     * @return  string
     */
    public function getPsp()
    {
        return $this->psp;
    }
}
