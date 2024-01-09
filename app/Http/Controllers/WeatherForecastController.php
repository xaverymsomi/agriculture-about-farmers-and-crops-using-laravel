<?php

namespace App\Http\Controllers;

use App\Models\Weather_Forecast;
use App\Http\Requests\StoreWeather_ForecastRequest;
use App\Http\Requests\UpdateWeather_ForecastRequest;

class WeatherForecastController extends Controller
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
    public function store(StoreWeather_ForecastRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Weather_Forecast $weather_Forecast)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weather_Forecast $weather_Forecast)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWeather_ForecastRequest $request, Weather_Forecast $weather_Forecast)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weather_Forecast $weather_Forecast)
    {
        //
    }
}
