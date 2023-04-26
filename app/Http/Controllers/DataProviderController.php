<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataProvider;

class DataProviderController extends Controller
{
    public function index()
    {
        $dataProviders = DataProvider::all();
        return view('index', compact('dataProviders'));
    }

    public function create()
    {
        return view('create');
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

    public function edit($id)
    {
        $dataProvider = DataProvider::findOrFail($id);
        return view('edit', compact('dataProvider'));
    }

    public function update(Request $request, $id)
    {
        $dataProvider = DataProvider::findOrFail($id);
        $validatedData = $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);

        $dataProvider->update($validatedData);

        return redirect()->route('data-providers.index')
            ->with('success', 'Data provider updated successfully');
    }

    public function destroy($id)
    {
        $dataProvider = DataProvider::findOrFail($id);
        $dataProvider->delete();

        return redirect()->route('data-providers.index')
            ->with('success', 'Data provider deleted successfully');
    }

    public function getImage(Request $request)
    {
        $dataProvider = DataProvider::findOrFail($request->id);
        return $dataProvider;
        $response = file_get_contents($dataProvider->url);

        return response($response)->header('Content-Type', 'image/jpeg');
    }
}
