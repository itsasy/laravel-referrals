<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home')->with([
            'referrals' => auth()->user()->referrals,
            'referred_by' => auth()->user()->referredBy->name ?? 'You are not referred by any user.',
            'referral_code' => $referral_code = auth()->user()->referral_code,
            'referral_link' => route('referral.link', ['referralCode' => $referral_code])
        ]);
    }
}
