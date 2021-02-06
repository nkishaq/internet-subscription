<?php

namespace App\Repositories\Subscriptions;
class SubscriptionsRepository implements ISubscriptions{
    protected $subscriptions;
    function __construct(Subscriptions $subscriptions)
	{
		$this->subscriptions=$subscriptions;
    }
    public function all()
    {
        return $this->subscriptions->get();
    }
}