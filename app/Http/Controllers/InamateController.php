<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Inamate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class InamateController extends Controller
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
            'idNumber' =>'required',
            'phoneNumber' =>'required',
            'degree' => 'required',
            'option' => 'required',
            'status' =>'required', // Password should be at least 8 characters and confirmed
        ];


        $validatedData = $request->validate($rules);
        $data = New Inamate();
        $data->username=$validatedData['username'];
        $data->idNumber = $validatedData['idNumber'];
        $data->phoneNumber = $validatedData['phoneNumber'];
        $data->degree = $validatedData['degree'];
        $data->option = $validatedData['option'];
        $data->status = $validatedData['status'];
        $data->save();

        return redirect()->back()->with('success', 'Inamate added successfully. You can now log in.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Inamate $inamate)
    {
$data = Inamate::all();
return view('mainAdmin.student',compact('data'));
    }

    public function showLeader(Inamate $inamate)
    {
$data = Inamate::all();
return view('leader.leaderUser',compact('data'));
    }

    public function showsupport(Inamate $inamate)
    {
$data = Inamate::all();
return view('support.supportUser',compact('data'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inamate $inamate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $rules = [
            'username' =>'required',
            'idNumber' =>'required',
            'phoneNumber' =>'required',
            'degree' => 'required',
            'option' => 'required',
            'status' =>'required', // Password should be at least 8 characters and confirmed
            'password' => 'sometimes|nullable|string|min:8|confirmed', // Password should have a minimum length and be confirmed
        ];
        $validator = Validator::make($request->all(), $rules);
     if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     $validatedData = $validator->validated();

      $data = Inamate::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $data->username=$validatedData['username'];
        $data->idNumber = $validatedData['idNumber'];
        $data->phoneNumber = $validatedData['phoneNumber'];
        $data->degree = $validatedData['degree'];
        $data->option = $validatedData['option'];
        $data->status = $validatedData['status'];

       if (!empty($validatedData['password'])) {
            $data->password = Hash::make($validatedData['password']); // Hash the password
        }

       $data->save();

       return redirect()->back()->with('success', 'Account updated successfully.');
    }

    public function updateSchool(Request $request, $id)
    {

        $rules = [
            'username' =>'required',
            'idNumber' =>'required',
            'phoneNumber' =>'required',
            'degree' => 'required',
            'option' => 'required',
            'status' =>'required', // Password should be at least 8 characters and confirmed
            'password' => 'sometimes|nullable|string|min:8|confirmed', // Password should have a minimum length and be confirmed
        ];
        $validator = Validator::make($request->all(), $rules);
     if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     $validatedData = $validator->validated();

      $data = Inamate::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $data->username=$validatedData['username'];
        $data->idNumber = $validatedData['idNumber'];
        $data->phoneNumber = $validatedData['phoneNumber'];
        $data->degree = $validatedData['degree'];
        $data->option = $validatedData['option'];
        $data->status = $validatedData['status'];

       if (!empty($validatedData['password'])) {
            $data->password = Hash::make($validatedData['password']); // Hash the password
        }

       $data->save();

       return redirect()->back()->with('success', 'Account updated successfully.');
    }

    public function updateSupporter(Request $request, $id)
    {

        $rules = [
            'username' =>'required',
            'idNumber' =>'required',
            'phoneNumber' =>'required',
            'degree' => 'required',
            'option' => 'required',
            'status' =>'required', // Password should be at least 8 characters and confirmed
            'password' => 'sometimes|nullable|string|min:8|confirmed', // Password should have a minimum length and be confirmed
        ];
        $validator = Validator::make($request->all(), $rules);
     if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
     $validatedData = $validator->validated();

      $data = Inamate::find($id);
        if (!$data) {
            return redirect()->back()->with('error', 'User not found.');
        }
        $data->username=$validatedData['username'];
        $data->idNumber = $validatedData['idNumber'];
        $data->phoneNumber = $validatedData['phoneNumber'];
        $data->degree = $validatedData['degree'];
        $data->option = $validatedData['option'];
        $data->status = $validatedData['status'];

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
        Inamate::where('id',$id)->delete();
        return redirect()->back()->with('success', 'Inamate deleted successfully');
    }
}
