<?php

namespace Imper86\AllegroApi\Soap\Wsdl;

class doSetShipmentPriceTypeResponse
{

    /**
     * @var int $operationResult
     */
    protected $operationResult = null;

    /**
     * @param int $operationResult
     */
    public function __construct($operationResult = null)
    {
      $this->operationResult = $operationResult;
    }

    /**
     * @return int
     */
    public function getOperationResult()
    {
      return $this->operationResult;
    }

    /**
     * @param int $operationResult
     * @return \Imper86\AllegroApi\Soap\Wsdl\doSetShipmentPriceTypeResponse
     */
    public function setOperationResult($operationResult)
    {
      $this->operationResult = $operationResult;
      return $this;
    }

}
