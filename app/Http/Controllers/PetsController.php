<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Breed;
use App\Models\Pet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PetsController extends Controller
{
    public function index()
    {
        return view('pages.pet.index', [
            'pets' => Pet::where('user_id', '=', Auth::id())->get(),
        ]);
    }

    public function create()
    {
        return view('pages.pet.create', [
            'areas' => Area::all(),
            'breeds' => Breed::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required'
        ]);

        $pet = new Pet();
        $pet->user_id = Auth::id();
        $pet->name = $request->name;
        $pet->breed_id = $request->breed_id;
        $pet->area_id = $request->area_id;
        $pet->birth_date = $request->birth_date;

        $pet->colour = $request->colour;
        $pet->weight = $request->weight;
        $pet->gender = $request->gender;

        $pet->save();

        return redirect()->route('pet.index');
    }

    public function show(Pet $pet)
    {
        return view('pages.pet.show');
    }

    public function edit(Pet $pet)
    {
        return view('pages.pet.edit');
    }

    public function update(Request $request, Pet $pet)
    {
        return redirect()->route('pet.show');
    }

    public function destroy(Pet $pet)
    {
        return redirect()->route('pet.index');
    }
}
