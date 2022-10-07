<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    public function attach(Request $request, User $user)
    {
        $roleId = request()->input('role');
        $user->roles()->attach($roleId);
        return back();
    }
    
    public function detach(Request $request, User $user)
    {
        $roleId = request()->input('role');
        $user->roles()->detach($roleId);
        return back();
    }
    
    public function create()
    {
        return view('role.create');
    }
    
    public function store(Request $request)
    {
        $inputs = $request->validate([
            'name'=>'required|max:100'
        ]);
        
        $roles = new Role();
        $roles->name = $request->name;
        //dd($roles);
        $roles->save();
        
        return to_route('role.create')->with('message', 'データを保存しました');
    }
    
    public function index()
    {
        $roles = Role::all();
        $user = auth()->user();
        
        return view('role.index', compact('roles','user'));
       
    }
}
