<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return Inertia::render('Users/Index', [
            'users' => User::all()->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'email' => $user->email,
                    // 'edit_url' => route('users.edit', $user),
                ];
            }),
            // 'create_url' => route('users.create'),
        ]);
    }

    public function edit(User $user)
    {
        return Inertia::render('Users/Edit', [
            'user' => $user
        ]);
    }

    public function create()
    {
        return Inertia::render('About');
    }

    public function youtube(){
        $url = 'https://www.youtube.com/watch?v=6JYIGclVQdw';
        return Inertia::location($url);
    }
}
