<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReferralController extends Controller
{
    public function link(Request $request, $referralCode)
    {
        //Si en caso abriste el link de referido,
        //se guardará el código de referido durante 7 días en una cookie.
        if (!$request->hasCookie('referral')) {
            $minutes = 60 * 40 * 7;
            $cookie = cookie('referral', $referralCode, $minutes);

            return redirect('/home')->withCookie($cookie);
        }

        return redirect('/home');
    }
}
