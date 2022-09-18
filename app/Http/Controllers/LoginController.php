<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('login.create');
    }

    public function store(StoreLoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (Hash::check($request->password, $user->password)) {
            Auth::login($user);

            session()->flash('success', 'Úspešné ste sa prihlásili');
            return redirect(route('bracelet.index'));
        }

        return back()->withErrors(['wrongCredentials' => 'Zadali ste nespávne údaje. Skúste znova']);
    }

    public function destroy()
    {
        Auth::logout();

        session()->flash('success', 'Úspešné ste sa odlhlásili');
        return back();
    }
}
