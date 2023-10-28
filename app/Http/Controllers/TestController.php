<?php

namespace App\Http\Controllers;

use App\Http\Requests\Test\StoreRequest;
use App\Http\Requests\Test\UpdateManagerRequest;
use App\Http\Requests\Test\UpdateRequest;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index()
    {
        $users = [];
        $data = Test::query()->with('user');

        $auth_user = Auth::user();
        if ($auth_user->is_admin === 0) {
            $data->where('user_id', $auth_user->id);
        }

        $tests = $data->get();

        return inertia('Test/Index', compact('tests', 'auth_user'))->rootView('app_auth');
    }

    public function index_manager()
    {
        $users = [];
        $data = Test::query()->with('user');

        $auth_user = Auth::user();
        if ($auth_user->is_admin === 0) {
            $data->where('user_id', $auth_user->id);
        }

        $tests = $data->get();

        return inertia('Test2/Index', compact('tests', 'auth_user'))->rootView('app_auth');
    }

    public function create()
    {
        $users = User::query()->where('is_admin', false)->get();
        return inertia('Test/Create', compact('users'))->rootView('app_auth');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Test::create($data);

        return redirect()->route('test.index');
    }

    public function edit(Test $test)
    {
        $users = User::query()->where('is_admin', false)->get();
        return inertia('Test/Edit', compact('test', 'users'))->rootView('app_auth');
    }

    public function edit_manager(Test $test)
    {
        return inertia('Test2/Edit', compact('test'));
    }

    public function update(Test $test, UpdateRequest $request)
    {
        $data = $request->validated();
        $test->update($data);

        return redirect()->route('test.index');
    }

    public function delete(Test $test)
    {
        $test->delete();
        return redirect()->route('test.index');
    }
}
