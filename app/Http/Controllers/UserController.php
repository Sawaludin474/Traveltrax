<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    
    public function index()
    {
        $totalusers = User::count();
        $users = User::Orderby('name','asc')->paginate(9);
        // return $users;
        return view('backend.index',compact('users','totalusers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
         
        // return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::FindOrFail($id);
        return view('backend.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::FindOrFail($id);
        return view('backend.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username,' . $user->id,
                'email' => 'required|email|unique:users,email,' . $user->id,
            ]);
    
            $user->update([
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
            ]);
    
            return redirect()->route('users.index')->with('success', 'User updated successfully.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
