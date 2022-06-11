<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Doctor;
use App\Models\Host;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class DoctorsController extends Controller
{
    public function index(Request $request)
    {
        $doctors = Doctor::with('user')
            ->when($request->has('area'), function ($q) use ($request){
                $q->where('area_id', '=', $request->area);
            })
            ->when($request->has('name'), function ($q) use ($request){
                $q->whereHas('user', function ($q1) use ($request){
                    $q1->where('name', 'like', '%'.$request->name.'%');
                });
            })->get();

        return view('pages.doctor.index', [
            'doctors' => $doctors,
            "areas" => Area::all(),
            'area_select' => $request->area ?? null,
            'name' => $request->name ?? null,
        ]);
    }

    public function create()
    {
        return view('pages.doctor.applying');
    }

    public function store(Request $request)
    {
        Log::info($request);
        $request->validate([
            'speciality' => 'required'
        ]);

        $doctor = new Doctor();
        $doctor->user_id = Auth::id();
        $doctor->speciality = $request->speciality;
        $doctor->sub_specialities = $request->sub_specialities ?? null;
        $doctor->consultation_fee = $request->consultation_fee ?? 0;
//        $doctor->insurances = $request->insurances ?? null;
//        $doctor->work = $request->work ?? null;
        $doctor->save();

//        return response()->json([
//            'message' => 'ok'
//        ]);

        return redirect()->route('doctors');
    }

    public function show(Doctor $doctor)
    {
        //
    }

    public function edit(Doctor $doctor)
    {
        //
    }

    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    public function destroy(Doctor $doctor)
    {
        //
    }
}
