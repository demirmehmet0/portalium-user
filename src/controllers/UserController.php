<?php

namespace Portalium\User\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Portalium\User\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $submit = 'Add';
        return view('portalium.user.list', compact('users', 'submit'));
    }

    public function create()
    {
        $submit = 'Add';
        $users = User::all();
        return view('portalium.user.create', compact( 'submit', 'users'));
    }

    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect()->route('user.create');
    }

    public function edit($id)
    {
        $users = User::all();
        $user = $users->find($id);
        $submit = 'Update';
        return view('portalium.user.create', compact('users', 'user', 'submit'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $user = User::findOrFail($id);
        $user->update($input);
        return redirect()->route('user.create');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.create');
    }
}