<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PharIo\Manifest\Email;

class AdminController extends Controller
{
    //

    public function dashboard(){
        return view('dashboard');
    }
    // End Method

    public function index(){
    
        $farmers = User::where('role','farmer')->latest()->get();
        return view('admin.farmerManagement.index',compact('farmers'));
    }
    // End Method

    public function create(){
        return view('admin.farmerManagement.create');
    }
    // End Method

    public function store(Request $request){
        $user_Validate = validator([
            'name' => 'required|string|max:55',
            'email' => 'required|string|max:55|unique:users:email',
            'FarmSize' => 'required|string|max:55',
            'Location' => 'required|string|max:55',
        ]);

        User::create([
            'name' => $request->name,
            'email'  => $request->email,
            'password' => Hash::make('19112000'),
            'image' => null,
            'status' => 'active',
            'FarmSize' => $request->FarmSize,
            'Location' => $request->Location
        ]);

        return redirect()->route('farmer');
    }
    // End Method

    public function show($id)
    {
        $farmer_information = User::findOrFail($id);
        return view('admin.farmerManagement.show', compact('farmer_information'));
    }
    // End Method

    public function edit($id)
    {
        
        $farmer_information = User::findOrFail($id);
        return view('admin.farmerManagement.edit', compact('farmer_information'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $farmer_information = $request->id;
        User::findOrFail($farmer_information)->update([
 
            'name' => $request->name,
            'email'  => $request->email,
            'FarmSize' => $request->FarmSize,
            'Location' => $request->Location

        ]);

        return redirect()->route('farmer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id)
    {
        User::findOrFail($id)->delete();

        return redirect()->back();
    }
}
