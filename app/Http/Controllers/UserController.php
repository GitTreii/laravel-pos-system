<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Laravel\Facades\Image;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|string|max:50|unique:users,username',
            'full_name' => 'required|string|max:100'
        ]);

        User::create($validated);

        return redirect('/users')->with('success', 'User created successfully.');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'username' => 'required|string|max:50|unique:users,username,' . $user->id,
            'full_name' => 'required|string|max:100',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        $data = [
            'username' => $validated['username'],
            'full_name' => $validated['full_name']
        ];

        if ($request->hasFile('avatar')) {
            $image = Image::read($request->file('avatar'))
                ->cover(300, 300)
                ->toJpeg(85);

            $path = 'avatars/' . Str::uuid() . '.jpg';

            Storage::disk('public')->put($path, (string) $image);

            if ($user->avatar) {
                Storage::disk('public')->delete($user->avatar);
            }

            $data['avatar'] = $path;
        }

        $user->update($data);

        return redirect('/users')->with('success', 'User updated successfully.');
    }
}
