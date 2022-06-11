<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $pets = Pet::where('user_id', '=', $user->id)->get();

        return view('pages.profile', [
            "user" => $user,
            "age" => date_diff(date_create($user->birth_date), date_create('now'))->y,
            "pets" => $pets
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        $pets = Pet::where('user_id', '=', $user->id)->get();
        return view('pages.profile', [
            "user" => $user,
            "age" => date_diff(date_create($user->birth_date), date_create('now'))->y,
            "pets" => $pets
        ]);


    }

    public function edit(User $user)
    {
        return view('pages.profile.edit', [
            "roles" => Role::all(),
            "user" => $user->load('pets', 'doctor', 'host'),
        ]);
    }

    public function update(Request $request, User $user)
    {
        $user->email = $request->email;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->ssn = $request->ssn;
        $user->birth_date = $request->birth_date;

        $user->update();

        return redirect()->route('profile');
    }

    public function destroy($id)
    {
        //
    }
}
