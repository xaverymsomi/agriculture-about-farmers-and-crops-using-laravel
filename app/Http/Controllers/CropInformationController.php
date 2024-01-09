<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crop_Information;
use App\Http\Requests\StoreCrop_InformationRequest;
use App\Http\Requests\UpdateCrop_InformationRequest;

class CropInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crops = Crop_Information::latest()->get();
        return view('farmer.crop_information.index', compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('farmer.crop_information.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCrop_InformationRequest $request)
    {
        $data = $request->validated();
        /** @var \App\Models\Crop_Information $user */
        $user = Crop_Information::create([
            'CropName' => $data['CropName'],
            'OptimalConditions' => $data['OptimalConditions'],
            'PlantingSeason' => $data['PlantingSeason'],
        ]);

        return redirect()->route('crop.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $crop_Information = Crop_Information::findOrFail($id);
        return view('farmer.crop_information.show', compact('crop_Information'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $crop_Information = Crop_Information::findOrFail($id);
        return view('farmer.crop_information.edit', compact('crop_Information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $crop_Information = $request->id;
        Crop_Information::findOrFail($crop_Information)->update([
 
            'CropName' => $request->CropName,
            'OptimalConditions' => $request->OptimalConditions,
            'PlantingSeason' => $request->PlantingSeason

        ]);

        return redirect()->route('crop.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        Crop_Information::findOrFail($id)->delete();

        return redirect()->back();
    }
}
