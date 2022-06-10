<?php

namespace App\Http\Controllers;

use Socialite;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

protected $redirectTo ='/home';

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('github')->user();

        return $user->token;
    }
}
