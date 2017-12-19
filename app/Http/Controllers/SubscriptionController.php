<?php

namespace App\Http\Controllers;

use Auth;

use App\User;

class SubscriptionController extends Controller
{

    protected $user;

    public function __construct()
    {
        $this->user = Auth::user();
    }

    public function getIndex()
    {
        return view('subscription.index')->with('user', $this->user);
    }

    public function getJoin()
    {
    	return view('subscription.join');
    }
}
