<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(Request $request)
    {
        $user = User::find($request->user()->id)->withTrashed()->firstOrFail();

        return view('user.dashboard', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = User::find($request->user()->id)->withTrashed()->firstOrFail();

        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($request->user()->id)->withTrashed()->firstOrFail();
        
        $user->update($request->all());

        return redirect()->route('user.edit');
    }

    public function destroy(Request $request, $id)
    {
        $user = User::find($request->user()->id)->firstOrFail();

        $user->delete();

        return redirect()->route('user.edit');
    }

    public function restore(Request $request, $id)
    {
        $user = User::find($request->user()->id)->withTrashed()->firstOrFail();

        $user->restore();

        return redirect()->route('user.edit');
    }
}
