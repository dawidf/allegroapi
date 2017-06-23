<?php

namespace Imper69\AllegroApi\Soap\Wsdl;

class DoGetSellRatingReasonsRequest
{

    /**
     * @var string $webapiKey
     */
    protected $webapiKey = null;

    /**
     * @var int $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string $webapiKey
     * @param int $countryCode
     */
    public function __construct($webapiKey = null, $countryCode = null)
    {
      $this->webapiKey = $webapiKey;
      $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getWebapiKey()
    {
      return $this->webapiKey;
    }

    /**
     * @param string $webapiKey
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetSellRatingReasonsRequest
     */
    public function setWebapiKey($webapiKey)
    {
      $this->webapiKey = $webapiKey;
      return $this;
    }

    /**
     * @return int
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param int $countryCode
     * @return \Imper69\AllegroApi\Soap\Wsdl\DoGetSellRatingReasonsRequest
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

}