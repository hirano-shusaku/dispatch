<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use App\Models\Role;

class ProfileController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('profile.index', compact('users'));
    }
    
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        
        $roles = Role::all();
        
        return view('profile.edit', compact('user', 'roles'));
    }
    
    public function update(User $user, Request $request)
    {
        $this->authorize('update', $user);
        
        $inputs = request()->validate([
            'name' => 'required|max:255',
            'name2' => 'nullable|max:255',
            'email' => ['required','email','max:255',Rule::unique('users')->ignore($user->id)],
            'avatar' => 'image|max:1024',
            'password' => 'nullable|max:255|min:8',
            'password_confirmation' => 'nullable|same:password'
        ]);
        //パスワード設定
        if(!isset($inputs['password']))
        {
            unset($inputs['password']);
        }else{
            $inputs['password'] = Hash::make($inputs['password']);
        }
        
        //avatar store
        if(isset($inputs['avatar']))
        {
            if($user->avatar !== 'user_default.jpg')
            {
                $olda = 'public/avatar/'.$user->avatar;
                Storage::delete($olda);
            }
            $name = request()->file('avatar')->getClientOriginalName();
            $avatar = date('Ymd_His').'_'.$name;
            request()->file('avatar')->storeAs('public/avatar', $avatar);
            $inputs['avatar'] = $avatar;
        }
        
        $user->update($inputs);
        return back()->with('message','情報を更新しました');
    }
    
    public function delete(User $user)
    {
        if($user->avatar !== 'user_default.jpg')
        {
            $olda = 'public/avatar/'.$user->avatar;
            Storage::delete($olda);
        }
        $user->delete();
        
    return back()->with('message', 'ユーザーを削除しました');
    }
}
