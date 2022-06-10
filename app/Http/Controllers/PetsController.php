<?php

namespace App\Http\Controllers;

use App\Models\Pet;
use Illuminate\Http\Request;

class PetsController extends Controller
{
    public function index()
    {
        return view('pages.pet.index');
    }

    public function create()
    {
        return view('pages.pet.create');
    }

    public function store(Request $request)
    {
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
