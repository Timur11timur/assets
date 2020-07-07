<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AccessTokenController extends Controller
{
    public function show()
    {
        return view('settings.token.show');
    }

    public function update()
    {
        $token = Str::random(60);

        $user = User::find(1);

        $user->forceFill([
            'api_token' => hash('sha256', $token)
        ])->save();

        return back()->with('message', 'We have generated a new token for you: ' . $token);
    }
}
