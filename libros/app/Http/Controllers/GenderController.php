<?php

namespace App\Http\Controllers;

use App\Http\Requests\Gender\StoreRequest;
use App\Http\Requests\Gender\UpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('Gender.index', compact('genders'));
    }
    public function create()
    {
        return view('Gender.create');
    }

    public function store(StoreRequest $request)
    {
        Gender::create($request->validated());
        return redirect()->route('genders.index');
    }
    public function show(Gender $gender)
    {
        return view('Gender.show', compact('gender'));
    }
    public function edit(Gender $gender)
    {
        return view('Gender.edit', compact('gender'));
    }
    public function update(UpdateRequest $request, Gender $gender)
    {
        $gender->update($request->validated());
        return redirect()->route('genders.index');
    }
    public function destroy(Gender $gender)
    {
        $gender->delete();
        return redirect()->route('genders.index');
    }
}