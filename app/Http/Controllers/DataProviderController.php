<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataProvider;

class DataProviderController extends Controller
{
    public function index()
    {
        $dataProviders = DataProvider::all();
        return view('data-providers.index', compact('dataProviders'));
    }

    public function create()
    {
        return view('data-providers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);

        DataProvider::create($validatedData);

        return redirect()->route('data-providers.index')
            ->with('success', 'Data provider created successfully');
    }

    public function edit(DataProvider $dataProvider)
    {
        return view('data-providers.edit', compact('dataProvider'));
    }

    public function update(Request $request, DataProvider $dataProvider)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);

        $dataProvider->update($validatedData);

        return redirect()->route('data-providers.index')
            ->with('success', 'Data provider updated successfully');
    }

    public function destroy(DataProvider $dataProvider)
    {
        $dataProvider->delete();

        return redirect()->route('data-providers.index')
            ->with('success', 'Data provider deleted successfully');
    }
}
