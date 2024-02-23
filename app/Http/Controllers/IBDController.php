<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ibdModel;
use Illuminate\Support\Facades\Hash;

class IBDController extends Controller
{
    public function list()
    {
        $data = ibdModel::select('Name', 'Gender', 'Ethnicity', 'DateOfBirth','Age')->get();
        return view('viewers.IBD.view', compact('data'));
    }  

    public function add()
    {
        $data['header_title'] = "Add New admin";
        return view('viewers.IBD.add', $data);
    }

    public function insert(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'gender' => 'required|in:Male,Female',
            'ethnicity' => 'required|in:Sinhalese,Tamil,Muslim,Other',
            'dob' => 'required|date',
            'contactNo' => 'required', // Add more specific validation as needed
            'ageOfSymptomOnset' => 'required|integer|min:0',
            'dateOfDiagnosis' => 'required|date',
            'diagnosis' => 'required|in:Crohn’s Disease,Ulcerative Colitis,Undetermined Colitis',
            'familyHistoryIBD' => 'required|in:Yes,No',
            'familyHistoryBowelCA' => 'required|in:Yes,No',
            'consanguinity' => 'required|in:Yes,No',
        ]);

        $newIBDPatientInformation = ibdModel::create($data);

        return redirect(route('viewers.home'));
        // ->with('success', 'Admin Sucessfully created.');
         // request()->validate([
        //     'email' => 'required|email|unique:users'
        // ]);
        // $user = new User;
        // $user->name = trim($request->name);
        // $user->email = trim($request->email);
        // $user->password = Hash::make($request->password);
        // $user->user_type = 1;
        // $user->save();
    }

}
