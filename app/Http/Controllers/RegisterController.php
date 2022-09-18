<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(StoreUserRequest $request)
    {
        User::create($request->validated());

        session()->flash('success', 'Úspešné ste sa zaregistrovali');
        return redirect(route('login.create'));
    }
}
