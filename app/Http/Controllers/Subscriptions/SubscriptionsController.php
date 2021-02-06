<?php

namespace App\Http\Controllers\Subscriptions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Subscriptions\ISubscriptions;
use App\Repositories\SubscriptionClass\ISubscriptionClass;
use App\Repositories\SubscriptionClassRule\ISubscriptionClassRule;

class SubscriptionsController extends Controller
{
    /* Instance of ISubscriptions model */
    protected $subscriptions;

    /* Instance of ISubscriptionClass model */
    protected $subscriptionClass;
    /* Instance of ISubscriptionClassRule model */
    protected $subscriptionClassRule;

    function __construct(ISubscriptions $subscriptions,ISubscriptionClass $subscriptionClass,ISubscriptionClassRule $subscriptionClassRule){
        $this->subscriptions=$subscriptions;
        $this->subscriptionClass=$subscriptionClass;
        $this->subscriptionClassRule=$subscriptionClassRule;
    } 
    public function index()
    {
        $subscriptionClass=$this->subscriptionClass->all();
        $subscriptions = $this->subscriptions->all();
        return view('subscriiptions.index',compact('subscriptionClass','subscriptions'));
       
    }
}
