<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use App\Service\SocialService;

class SocialController extends Controller
{
    public function index()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    public function callback()
    {
        $user = Socialite::driver('vkontakte')->user();

        $objSocial = new SocialService();
        if ($objSocial->saveSocialData($user)) {
            return redirect()->route('hall');
        }

        return back();
    }
}
