<?php namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SocialService
{
    public function saveSocialData($user)
    {
        $email = $user->getEmail();
        $name = $user->getName();
        $avatar = $user->getAvatar();

        $password = Hash::make('qwerty');
        $data = ['email' => $email, 'password' => $password, 'name' => $name, 'avatar' => $avatar];
        $u = User::where('email', $email)->first();

        if ($u) {
            return $u->fill(['name' => $name, 'avatar' => $avatar]);
        }

        return User::create($data);
    }
}
