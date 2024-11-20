<?php

namespace App\Http\Controllers;

use App\Models\auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index()
    {
        $autos = Auto::all();
        return view('autos.index', compact('autos'));
    }

    public function create()
    {
        return view('autos.create');
    }

    public function store(Request $request)
    {
        Auto::create($request->all());
        return redirect()->route('autos.index')->with('success', 'Auto creado correctamente');
    }

    public function show(Auto $auto)
    {
        return view('autos.show', compact('auto'));
    }

    public function edit(Auto $auto)
    {
        return view('autos.edit', compact('auto'));
    }

    public function update(Request $request, Auto $auto)
    {
        $auto->update($request->all());
        return redirect()->route('autos.index')->with('success', 'Auto actualizado correctamente');
    }

    public function destroy(Auto $auto)
    {
        $auto->delete();
        return redirect()->route('autos.index')->with('success', 'Auto eliminado correctamente');
    }
}
