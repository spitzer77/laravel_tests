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

class Test2Controller extends Controller
{
    public function index()
    {
        $data = Test::query()->with('user');
        $auth_user = Auth::user();
        $data->where('user_id', $auth_user->id);
        $tests = $data->get();

        return inertia('Test2/Index', compact('tests', 'auth_user'))->rootView('app_auth');
    }

    public function edit(Test $test)
    {
        return inertia('Test2/Edit', compact('test'))->rootView('app_auth');
    }

    public function update(Test $test, UpdateManagerRequest $request)
    {
        $data = $request->validated();
        $test->update($data);

        return redirect()->route('test2.index');
    }
}
