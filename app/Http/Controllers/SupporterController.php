<?php

namespace App\Http\Controllers;

use App\Models\Supporter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
class SupporterController extends Controller
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
    public function store(Request $request)
    {

        $rules = [
            'name' =>'required',
            'email' =>'required',
            'phone' =>'required',
            'job' => 'required',
            'worker' => 'required',
            'city' => 'required',
            'password' =>'required', // Password should be at least 8 characters and confirmed
        ];


        $validatedData = $request->validate($rules);
        $data = New Supporter();
        $data->name = $validatedData['name'];
        $data->Email = $validatedData['email'];
        $data->phone = $validatedData['phone'];
        $data->business = $validatedData['job'];
        $data->workerNo = $validatedData['worker'];
        $data->City = $validatedData['city'];
        $data->password = Hash::make($validatedData['password']); // Hash the password
        $data->save();
        return redirect()->back()->with('success', 'Account registered successfully. You can now log in.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Supporter $supporter)
    {
        $data = Supporter::all();
        return view('mainAdmin.supporter',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supporter $supporter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'job' => 'required|string|max:255',
            'worker' => 'required|integer|min:1',
            'city' => 'required|string|max:255',
            'password' => 'sometimes|nullable|string|min:8|confirmed', // Password should have a minimum length and be confirmed
        ];
        $validator = Validator::make($request->all(), $rules);
     if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     $validatedData = $validator->validated();

      $data = Supporter::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $data->name = $validatedData['name'];
        $data->email = $validatedData['email']; // Ensure that your database field is named 'email', not 'Email'
        $data->phone = $validatedData['phone'];
        $data->business = $validatedData['job'];
        $data->workerNo = $validatedData['worker'];
        $data->city = $validatedData['city']; // Ensure that your database field is named 'city', not 'City'

       if (!empty($validatedData['password'])) {
            $data->password = Hash::make($validatedData['password']); // Hash the password
        }

       $data->save();

       return redirect()->back()->with('success', 'Account updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Supporter::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Support deletec successfully');
    }
}
