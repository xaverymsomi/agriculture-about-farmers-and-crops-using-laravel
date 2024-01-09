<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Farm_Management;
use App\Models\Crop_Information;
use App\Http\Requests\StoreFarm_ManagementRequest;
use App\Http\Requests\UpdateFarm_ManagementRequest;

class FarmManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFarm_ManagementRequest $request)
    {
        // 
    }

    /**
     * Display the specified resource.
     */
    public function show(Farm_Management $farm_Management)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Farm_Management $farm_Management)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFarm_ManagementRequest $request, Farm_Management $farm_Management)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Farm_Management $farm_Management)
    {
        //
    }
}
