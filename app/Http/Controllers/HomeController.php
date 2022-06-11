<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $user = Auth::user();
            $role = $user->role->name;

            Log::info($role);
            switch ($role){
                case 'Admin' : break;
                case 'Doctor':
                    if(!$user->doctor) {
                        return redirect()->route('doctors.create');
                    }
                    break;
                case 'Host':
                    if(!$user->host) {
                        return redirect()->route('hosts.create');
                    }
                    break;
                case 'Pet owner':
                    if(!$user->pets) {
                        return redirect()->route('pet.create');
                    }
                    break;
            }

            return view('pages.home');

        }else {
            return view('pages.home');
        }

    }
}
