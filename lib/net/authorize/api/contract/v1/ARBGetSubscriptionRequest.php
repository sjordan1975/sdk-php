<?php

namespace net\authorize\api\contract\v1;

/**
 * Class representing ARBGetSubscriptionRequest
 */
class ARBGetSubscriptionRequest extends ANetApiRequestType
{

    /**
     * @property string $subscriptionId
     */
    private $subscriptionId = null;

    /**
     * @property string $includeTransactions
     */
    private $includeTransactions = false;

    /**
     * Gets as subscriptionId
     *
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * Sets a new subscriptionId
     *
     * @param string $subscriptionId
     * @return self
     */
    public function setSubscriptionId($subscriptionId)
    {
        $this->subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * Gets as includeTransactions
     *
     * @return string
     */
    public function getIncludeTransactions()
    {
        return $this->includeTransactions;
    }

    /**
     * Sets a new includeTransactions
     *
     * @param string $includeTransactions
     * @return self
     */
    public function setIncludeTransactions($includeTransactions)
    {
        $this->includeTransactions = $includeTransactions;
        return $this;
    }
}

