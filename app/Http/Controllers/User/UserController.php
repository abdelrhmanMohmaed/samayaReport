<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function show()
    {
        $data['users'] = User::where('role_id', 2)
            ->orWhere('role_id', 3)
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('Users.show')->with($data);
    }

    public function create()
    {
        return view('Users.add-users');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:6|max:20',
            'password_confirmation' => 'required|same:password|min:6',
            'role_id' => 'required|exists:roles,id',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return redirect(url('dashboard/Add-Users'))->withErrors($errors);
        }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
        ]);
        $request->session()->flash('success', 'Your Add a New User');
        return back();
    }

    public function promote($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'role_id' => Role::select('id')->where('name', 'admin')->first()->id,
        ]);
        return back();
    }

    public function demote($id)
    {
        $admin = User::findOrFail($id);
        $admin->update([
            'role_id' => Role::select('id')->where('name', 'user')->first()->id,
        ]);
        return back();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back();
    }
}
