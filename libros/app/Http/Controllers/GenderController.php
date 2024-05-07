<?php

namespace App\Http\Controllers;

use App\Http\Requests\GenderStoreRequest;
use App\Http\Requests\GenderUpdateRequest;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index()
    {
        $genders = Gender::all();
        return view('index', compact('genders'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(GenderStoreRequest $request)
    {
        Gender::create([ 
            'name' => $request->name, 
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('genders.index');
    }
    public function show(Gender $gender)
    {
        return view('show', compact('gender'));
    }

    public function edit(Gender $gender)
    {
        return view('edit', compact('gender'));
    }
    public function update(GenderUpdateRequest $request, Gender $gender)
    {
        $gender->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->route('genders.index');
    }
    public function destroy(Gender $gender)
    {
        $gender->delete();

        return redirect()->route('genders.index');
    }
}