<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'name2' => ['nullable', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'avatar' => ['image', 'max:1024'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $attr = [
            'name' => $request->name,
            'name2' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];
        
        if(request()->hasFile('avatar'))
        {   
            $name = request()->file('avatar')->getClientOriginalName();
            $avatar = date('Ymd_His').'_'.$name;
            request()->file('avatar')->storeAs('public/avatar', $avatar);
            
            $attr['avatar'] = $avatar;
        }
        
        $user = User::create($attr);

        event(new Registered($user));
        
        $user->roles()->attach(2);

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
