<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Doctor;
use App\Models\Host;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HostsController extends Controller
{
    public function index(Request $request)
    {
        $hosts = Host::with('user')
            ->when($request->has('area'), function ($q) use ($request){
                $q->where('area_id', '=', $request->area);
            })
            ->when($request->has('name'), function ($q) use ($request){
                $q->whereHas('user', function ($q1) use ($request){
                    $q1->where('name', 'like', '%'.$request->name.'%');
                });
            })->get();
        return view('pages.host.index', [
            'hosts' => $hosts,
            "areas" => Area::all(),
            'area_select' => $request->area ?? null,
            'name' => $request->name ?? null,
        ]);
    }

    public function create()
    {
        if(Auth::user()->role_id !== Role::where('name', '=', 'host')->first()->id) {
            return abort(403);
        }
        return view('pages.host.applying', [
            "areas" => Area::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'area_id' => 'required'
        ]);

        $host = new Host();
        $host->user_id = Auth::id();
        $host->hosting_fee = $request->hosting_fee;
        $host->area_id = $request->area_id;
        $host->save();

        return redirect()->route('hosts');
    }

    public function show(Host $host)
    {
        return view('pages.host.book', [
            'host' => $host
        ]);
    }

    public function edit(Host $host)
    {
        //
    }

    public function update(Request $request, Host $host)
    {
        //
    }

    public function destroy(Host $host)
    {
        //
    }
}
