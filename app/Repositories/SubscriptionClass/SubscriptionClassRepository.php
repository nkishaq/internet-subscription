<?php

namespace App\Repositories\SubscriptionClass;
class SubscriptionClassRepository implements ISubscriptionClass{
    protected $subscriptionClass;
    function __construct(SubscriptionClass $subscriptionClass)
	{
		$this->subscriptionClass=$subscriptionClass;
    }
    public function all()
    {
        return $this->subscriptionClass
            ->with('classRules')
            ->with('classRules.rule')
            ->paginate(10);
    }
}