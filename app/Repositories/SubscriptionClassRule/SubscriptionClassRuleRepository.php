<?php

namespace App\Repositories\SubscriptionClassRule;
class SubscriptionClassRuleRepository implements ISubscriptionClassRule{
    protected $subscriptionClassRule;
    function __construct(SubscriptionClassRule $subscriptionClassRule)
	{
		$this->subscriptionClassRule=$subscriptionClassRule;
    }
    public function all()
    {
        return $this->subscriptionClassRule->get();
    }
}