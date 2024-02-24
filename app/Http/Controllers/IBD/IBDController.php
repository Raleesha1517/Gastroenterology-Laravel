<?php

namespace App\Http\Controllers\IBD;

use Illuminate\Http\Request;
use App\Models\IBD\ibdModel;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller; 

class IBDController extends Controller
{
    public function list()
    {
        $data = ibdModel::all();
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
            'name' => 'required|string|max:255',
            'gender' => 'required|in:Male,Female',
            'ethnicity' => 'required|in:Sinhalese,Tamil,Muslim,Other',
            'dob' => 'required|date',
            'contactNo' => 'required|string|max:20',
            'ageOfSymptomOnset' => 'required|integer|min:0',
            'dateOfDiagnosis' => 'required|date',
            'diagnosis' => 'required|in:Crohn’s Disease,Ulcerative Colitis,Undetermined Colitis',
            'familyHistoryIBD' => 'required|in:Yes,No',
            'degreeOfRelationIBD' => 'nullable|string|max:255',
            'familyHistoryBowelCA' => 'required|in:Yes,No',
            'degreeOfRelationBowelCA' => 'nullable|string|max:255',
            'consanguinity' => 'required|in:Yes,No',
            'degreeOfConsanguinity' => 'nullable|string|max:255'
        ]);
        
        $ibd = ibdModel::create([
            'Name' => $data['name'],
            'Gender' => $data['gender'],
            'Ethnicity' => $data['ethnicity'],
            'DateOfBirth' => $data['dob'],
            'Age' => null, // This will be automatically generated based on DateOfBirth
            'Address' => null, // You can set address separately if needed
            'ContactNo' => $data['contactNo'],
            'AgeOfSymptomOnset' => $data['ageOfSymptomOnset'],
            'DurationOfSymptoms' => null, // This will be automatically generated based on DateOfDiagnosis and AgeOfSymptomOnset
            'DateOfDiagnosis' => $data['dateOfDiagnosis'],
            'AgeOfDiagnosis' => null, // This will be automatically generated based on DateOfBirth and DateOfDiagnosis
            'Diagnosis' => $data['diagnosis'],
            'FamilyHistoryOfIBD' => $data['familyHistoryIBD'],
            'DegreeOfRelationIBD' => $data['degreeOfRelationIBD'],
            'FamilyHistoryOfBowelCA' => $data['familyHistoryBowelCA'],
            'DegreeOfRelationBowelCA' => $data['degreeOfRelationBowelCA'],
            'Consanguinity' => $data['consanguinity'],
            'DegreeOfConsanguinity' => $data['degreeOfConsanguinity']
        ]);
        
        return redirect('viewers/home');
    }

}
