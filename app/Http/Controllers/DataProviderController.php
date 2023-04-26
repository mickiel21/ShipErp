<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataProvider;

class DataProviderController extends Controller
{
    public function add(Request $request)
    {
        $dataProvider = new DataProvider();
        $dataProvider->name = $request->name;
        $dataProvider->url = $request->url;
        $dataProvider->save();

        return response()->json(['success' => true]);
    }

    public function edit(Request $request)
    {
        $dataProvider = DataProvider::find($request->id);
        $dataProvider->name = $request->name;
        $dataProvider->url = $request->url;
        $dataProvider->save();

        return response()->json(['success' => true]);
    }

    public function delete(Request $request)
    {
        $dataProvider = DataProvider::find($request->id);
        $dataProvider->delete();

        return response()->json(['success' => true]);
    }

    public function getImage(Request $request)
    {
        $dataProvider = DataProvider::find($request->id);
        $response = file_get_contents($dataProvider->url);

        return response($response)->header('Content-Type', 'image/jpeg');
    }

}
