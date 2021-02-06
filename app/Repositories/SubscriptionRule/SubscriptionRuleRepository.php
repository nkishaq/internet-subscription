<?php

namespace App\Repositories\SubscriptionRule;
class SubscriptionRuleRepository implements ISubscriptionRule{
    protected $subscriptionRule;
    function __construct(Subscriptions $subscriptionRule)
	{
		$this->subscriptionRule=$subscriptionRule;
    }
    public function all()
    {
        return $this->subscriptionRule->get();
    }
}