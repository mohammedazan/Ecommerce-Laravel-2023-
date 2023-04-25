<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class YourControllerName extends Controller
{
    public function front_page (Request $request) {

        return view('emails.email');
    }

    public function showUsers()
{
    $users = User::all();
    return view('users', ['users' => $users]);
}


public function destroy($id)
{
    $user = User::findOrFail($id);

    $user->delete();

    return redirect()->back()->with('success', 'User has been deleted successfully.');
}

public function index()
{
    $users = User::all();
    return view('users.index', compact('users'));
}


}
