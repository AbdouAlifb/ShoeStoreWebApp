<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //

    public function index()
{
    $users = User::all(); // Assuming your user model is named 'User'

    return view('auth.index', compact('users'));
}
public function edit($id)
{
    $user = User::findOrFail($id);
    return view('auth.edit', compact('user'));
}
public function update(Request $request, $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
    ]);

    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}

public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();

    return redirect()->route('users.index')->with('success', 'User deleted successfully.');
}


}
