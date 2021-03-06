<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class RefundsDealsListType
{

    /**
     * @var int $dealId
     */
    protected $dealId = null;

    /**
     * @var \DateTime $dealDate
     */
    protected $dealDate = null;

    /**
     * @var int $timeLeft
     */
    protected $timeLeft = null;

    /**
     * @var int $buyerId
     */
    protected $buyerId = null;

    /**
     * @var string $buyerLogin
     */
    protected $buyerLogin = null;

    /**
     * @var int $itemId
     */
    protected $itemId = null;

    /**
     * @var string $itemTitle
     */
    protected $itemTitle = null;

    /**
     * @var int $bidsCount
     */
    protected $bidsCount = null;

    /**
     * @var string $quantityType
     */
    protected $quantityType = null;

    /**
     * @var string $paymentStatus
     */
    protected $paymentStatus = null;

    /**
     * @param int $dealId
     * @param \DateTime $dealDate
     * @param int $timeLeft
     * @param int $buyerId
     * @param string $buyerLogin
     * @param int $itemId
     * @param string $itemTitle
     * @param int $bidsCount
     * @param string $quantityType
     * @param string $paymentStatus
     */
    public function __construct($dealId = null, \DateTime $dealDate = null, $timeLeft = null, $buyerId = null, $buyerLogin = null, $itemId = null, $itemTitle = null, $bidsCount = null, $quantityType = null, $paymentStatus = null)
    {
      $this->dealId = $dealId;
      $this->dealDate = $dealDate ? $dealDate->format(\DateTime::ATOM) : null;
      $this->timeLeft = $timeLeft;
      $this->buyerId = $buyerId;
      $this->buyerLogin = $buyerLogin;
      $this->itemId = $itemId;
      $this->itemTitle = $itemTitle;
      $this->bidsCount = $bidsCount;
      $this->quantityType = $quantityType;
      $this->paymentStatus = $paymentStatus;
    }

    /**
     * @return int
     */
    public function getDealId()
    {
      return $this->dealId;
    }

    /**
     * @param int $dealId
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setDealId($dealId)
    {
      $this->dealId = $dealId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDealDate()
    {
      if ($this->dealDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dealDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dealDate
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setDealDate(\DateTime $dealDate)
    {
      $this->dealDate = $dealDate->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeLeft()
    {
      return $this->timeLeft;
    }

    /**
     * @param int $timeLeft
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setTimeLeft($timeLeft)
    {
      $this->timeLeft = $timeLeft;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId()
    {
      return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setBuyerId($buyerId)
    {
      $this->buyerId = $buyerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBuyerLogin()
    {
      return $this->buyerLogin;
    }

    /**
     * @param string $buyerLogin
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setBuyerLogin($buyerLogin)
    {
      $this->buyerLogin = $buyerLogin;
      return $this;
    }

    /**
     * @return int
     */
    public function getItemId()
    {
      return $this->itemId;
    }

    /**
     * @param int $itemId
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setItemId($itemId)
    {
      $this->itemId = $itemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getItemTitle()
    {
      return $this->itemTitle;
    }

    /**
     * @param string $itemTitle
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setItemTitle($itemTitle)
    {
      $this->itemTitle = $itemTitle;
      return $this;
    }

    /**
     * @return int
     */
    public function getBidsCount()
    {
      return $this->bidsCount;
    }

    /**
     * @param int $bidsCount
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setBidsCount($bidsCount)
    {
      $this->bidsCount = $bidsCount;
      return $this;
    }

    /**
     * @return string
     */
    public function getQuantityType()
    {
      return $this->quantityType;
    }

    /**
     * @param string $quantityType
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setQuantityType($quantityType)
    {
      $this->quantityType = $quantityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPaymentStatus()
    {
      return $this->paymentStatus;
    }

    /**
     * @param string $paymentStatus
     * @return \Imper86\AllegroApi\Soap\Wsdl\RefundsDealsListType
     */
    public function setPaymentStatus($paymentStatus)
    {
      $this->paymentStatus = $paymentStatus;
      return $this;
    }

}
