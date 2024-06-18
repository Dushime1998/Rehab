<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\RegisteredUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; // Import the Hash facade
class RegisteredUserController extends Controller
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
            'username' =>'required',
            'email' =>'required',
            'phoneNumber' =>'required',
            'role' => 'required',
            'password' =>'required', // Password should be at least 8 characters and confirmed
        ];


        $validatedData = $request->validate($rules);

        $data = new RegisteredUser();
        $data->username = $validatedData['username'];
        $data->email = $validatedData['email'];
        $data->phone = $validatedData['phoneNumber'];
        $data->role = $validatedData['role'];
        $data->password = Hash::make($validatedData['password']); // Hash the password


        $data->save();


        return redirect()->back()->with('success', 'Account registered successfully. You can now log in.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RegisteredUser $registeredUser)
    {
        //
    }

    public function allUsers(RegisteredUser $registeredUser)
    {
        $data = RegisteredUser::all();
        return view('mainAdmin.users',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegisteredUser $registeredUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $rules = [
            'username' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'role' => 'required',
            'password' => 'required|min:4', // It's good practice to have a minimum length for passwords
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $validatedData = $validator->validated();
        $user = RegisteredUser::find($id);
       if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->update([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'phone' => $validatedData['phoneNumber'],
            'role' => $validatedData['role'],
            'password' => Hash::make($validatedData['password']), // Hash the password
        ]);

      return redirect()->back()->with('success', 'Account updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        RegisteredUser::where('id',$id)->delete();
        return redirect()->back()->with('success', 'User deletec successfully');
    }
}
