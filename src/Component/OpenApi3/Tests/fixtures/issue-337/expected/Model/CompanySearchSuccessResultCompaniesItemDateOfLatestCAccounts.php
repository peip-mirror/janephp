<?php

namespace CreditSafe\API\Model;

class CompanySearchSuccessResultCompaniesItemDateOfLatestCAccounts extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = array();
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
}