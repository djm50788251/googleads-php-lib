<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativesByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\CreativePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\CreativePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\CreativePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\CreativePage $rval
     * @return \Google\AdsApi\Dfp\v201705\getCreativesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
