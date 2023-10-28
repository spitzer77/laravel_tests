<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\User;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->where('is_admin', false)->get();

        //return Inertia::render('User/Index')->rootView('app_auth');
        return inertia('User/Index', compact('users'))->rootView('app_auth');
    }

    public function create()
    {
        return inertia('User/Create')->rootView('app_auth');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index');
    }

    public function edit(User $user)
    {
        return inertia('User/Edit', compact('user'));
    }

    public function update(User $user, Request $request)
    {
        //dd(auth()->id());

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:users,email,'.$user->id,
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($request['password']) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
        }

        return redirect()->route('user.index');
    }

    public function delete(User $user)
    {
        Test::where('user_id', $user->id)->delete();
        $user->delete();

        return redirect()->route('user.index');
    }

}
