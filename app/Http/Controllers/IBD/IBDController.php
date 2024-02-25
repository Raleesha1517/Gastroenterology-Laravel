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
            'degreeOfConsanguinity' => 'nullable|string|max:255',

            //presentation 

            'fever' => 'required|in:Yes,No',
            'oralUlcers' => 'required|in:Yes,No',
            'oralGranulomatosis' => 'required|in:Yes,No',
            'nausea' => 'required|in:Yes,No',
            'massiveGIBleeding' => 'required|in:Yes,No',
            'vomiting' => 'required|in:Yes,No',
            'abdominalMass' => 'required|in:Yes,No',
            'shock' => 'required|in:Yes,No',
            'abdominalPain' => 'required|in:Yes,No',
            'peritonitis' => 'required|in:Yes,No',
            'mucoidStools' => 'required|in:Yes,No',
            'tenesmus' => 'required|in:Yes,No',
            'chronicDiarrhea' => 'required|in:Yes,No',
            'jointPain' => 'required|in:Yes,No',
            'bloodyDiarrhea' => 'required|in:Yes,No',
            'perianalPain' => 'required|in:Yes,No',
            'malaiseFatigue' => 'required|in:Yes,No',
            'lossOfAppetite' => 'required|in:Yes,No',
            'lossOfWeight' => 'required|in:Yes,No',
            'failureToThrive' => 'required|in:Yes,No',
            'pallor' => 'required|in:Yes,No',
            'oralUlcersSign' => 'required|in:Yes,No',
            'clubbing' => 'required|in:Yes,No',
            'orofacialGranulomatosis' => 'required|in:Yes,No',
            'hepatomegaly' => 'required|in:Yes,No',
            'abdominalTenderness' => 'required|in:Yes,No',
            'splenomegaly' => 'required|in:Yes,No',
            'involuntaryGuarding' => 'required|in:Yes,No',
            'perianalFissures' => 'required|in:Yes,No',
            'indolentPerianalFistula' => 'required|in:Yes,No',
            'perianalAbscess' => 'required|in:Yes,No',
            'activeDrainingFistula' => 'required|in:Yes,No',
            'pubertalDelay' => 'required|in:Yes,No',
            'asymptomaticPerianalTags' => 'required|in:Yes,No',
            'inflamedPerianalTags' => 'required|in:Yes,No',
            'muscleWasting' => 'required|in:Yes,No',
            'arthritis' => 'required|in:Yes,No',
            'erythemaNodosum' => 'required|in:Yes,No',
            'iritisUveitis' => 'required|in:Yes,No',
            'pyodermaGangrenosum' => 'required|in:Yes,No',
            'oedema' => 'required|in:Yes,No',
            'others' => 'nullable|string|max:255',

            //laboratory 

            'ClinicalID' => 'required|integer', // Example validation rule for ClinicalID
            'Hemoglobin' => 'nullable|numeric', // Example validation rule for Hemoglobin
            'MeanCorpuscularVolume' => 'nullable|numeric', // Example validation rule for MeanCorpuscularVolume
            'WhiteBloodCellCount' => 'nullable|numeric', // Example validation rule for WhiteBloodCellCount
            'PlateletCount' => 'nullable|numeric', // Example validation rule for PlateletCount
            'ESR' => 'nullable|numeric', // Example validation rule for ESR
            'CRP' => 'nullable|numeric', // Example validation rule for CRP
            'Haematocrit' => 'nullable|numeric', // Example validation rule for Haematocrit
            'Albumin' => 'nullable|numeric', // Example validation rule for Albumin
            'SerumTotalBilirubin' => 'nullable|numeric', // Example validation rule for SerumTotalBilirubin
            'ALT' => 'nullable|numeric', // Example validation rule for ALT
            'AST' => 'nullable|numeric', // Example validation rule for AST
            'GGT' => 'nullable|numeric', // Example validation rule for GGT
            'Urea' => 'nullable|in:Positive,Negative', // Example validation rule for Urea
            'FaecalCalprotectin' => 'nullable|in:Positive,Negative', // Example validation rule for FaecalCalprotectin
            'FaecalLactoferrin' => 'nullable|in:Positive,Negative', // Example validation rule for FaecalLactoferrin
            'StoolOccultBlood' => 'nullable|in:Positive,Negative', // Example validation rule for StoolOccultBlood
            'StoolCulture' => 'nullable|in:Positive,Negative', // Example validation rule for StoolCulture
            'StoolCultureOrganism' => 'nullable|string', // Example validation rule for StoolCultureOrganism
            'TuberculosisWorkup' => 'nullable|in:Done,Not done', // Example validation rule for TuberculosisWorkup
            'TuberculosisResult' => 'nullable|in:Positive,Negative', // Example validation rule for TuberculosisResult
            'GeneticTesting' => 'nullable|in:Done,Not done', // Example validation rule for GeneticTesting
            'GeneticTestingResults' => 'nullable|string', // Example validation rule for GeneticTestingResults
            'MRI' => 'nullable|in:Done,Not done', // Example validation rule for MRI
            'MRI_Date' => 'nullable|date', // Example validation rule for MRI_Date
            'MRI_Results' => 'nullable|string', // Example validation rule for MRI_Results
            'CECT' => 'nullable|in:Done,Not done', // Example validation rule for CECT
            'CECT_Date' => 'nullable|date', // Example validation rule for CECT_Date
            'CECT_Results' => 'nullable|string', // Example validation rule for CECT_Results
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

        $ibd->ibdPresentation()->create([
            'ClinicalID' => $ibd->ClinicalID,
            'Fever' => $data['fever'],
            'OralUlcers' => $data['oralUlcers'],
            'OralGranulomatosis' => $data['oralGranulomatosis'],
            'Nausea' => $data['nausea'],
            'MassiveGIBleeding' => $data['massiveGIBleeding'],
            'Vomiting' => $data['vomiting'],
            'AbdominalMass' => $data['abdominalMass'],
            'Shock' => $data['shock'],
            'AbdominalPain' => $data['abdominalPain'],
            'Peritonitis' => $data['peritonitis'],
            'MucoidStools' => $data['mucoidStools'],
            'Tenesmus' => $data['tenesmus'],
            'ChronicDiarrhea' => $data['chronicDiarrhea'],
            'JointPain' => $data['jointPain'],
            'BloodyDiarrhea' => $data['bloodyDiarrhea'],
            'PerianalPain' => $data['perianalPain'],
            'MalaiseFatigue' => $data['malaiseFatigue'],
            'LossOfAppetite' => $data['lossOfAppetite'],
            'LossOfWeight' => $data['lossOfWeight'],
            'FailureToThrive' => $data['failureToThrive'],
            'Others' => $data['others'],
            'Pallor' => $data['pallor'],
            'OralUlcersSign' => $data['oralUlcersSign'],
            'Clubbing' => $data['clubbing'],
            'OrofacialGranulomatosis' => $data['orofacialGranulomatosis'],
            'Hepatomegaly' => $data['hepatomegaly'],
            'AbdominalTenderness' => $data['abdominalTenderness'],
            'Splenomegaly' => $data['splenomegaly'],
            'InvoluntaryGuarding' => $data['involuntaryGuarding'],
            'PerianalFissures' => $data['perianalFissures'],
            'IndolentPerianalFistula' => $data['indolentPerianalFistula'],
            'PerianalAbscess' => $data['perianalAbscess'],
            'ActiveDrainingFistula' => $data['activeDrainingFistula'],
            'PubertalDelay' => $data['pubertalDelay'],
            'AsymptomaticPerianalTags' => $data['asymptomaticPerianalTags'],
            'InflamedPerianalTags' => $data['inflamedPerianalTags'],
            'MuscleWasting' => $data['muscleWasting'],
            'Arthritis' => $data['arthritis'],
            'ErythemaNodosum' => $data['erythemaNodosum'],
            'IritisUveitis' => $data['iritisUveitis'],
            'PyodermaGangrenosum' => $data['pyodermaGangrenosum'],
            'Oedema' => $data['oedema'],
        ]);

        $ibd->ibdLaboratory()->create([
            'ClinicalID' => $ibd->ClinicalID,
            'Hemoglobin' => $data['Hemoglobin'],
            'MeanCorpuscularVolume' => $data['MeanCorpuscularVolume'],
            'WhiteBloodCellCount' => $data['WhiteBloodCellCount'],
            'PlateletCount' => $data['PlateletCount'],
            'ESR' => $data['ESR'],
            'CRP' => $data['CRP'],
            'Haematocrit' => $data['Haematocrit'],
            'Albumin' => $data['Albumin'],
            'SerumTotalBilirubin' => $data['SerumTotalBilirubin'],
            'ALT' => $data['ALT'],
            'AST' => $data['AST'],
            'GGT' => $data['GGT'],
            'Urea' => $data['Urea'],
            'FaecalCalprotectin' => $data['FaecalCalprotectin'],
            'FaecalLactoferrin' => $data['FaecalLactoferrin'],
            'StoolOccultBlood' => $data['StoolOccultBlood'],
            'StoolCulture' => $data['StoolCulture'],
            'StoolCultureOrganism' => $data['StoolCultureOrganism'],
            'TuberculosisWorkup' => $data['TuberculosisWorkup'],
            'TuberculosisResult' => $data['TuberculosisResult'],
            'GeneticTesting' => $data['GeneticTesting'],
            'GeneticTestingResults' => $data['GeneticTestingResults'],
            'MRI' => $data['MRI'],
            'MRI_Date' => $data['MRI_Date'],
            'MRI_Results' => $data['MRI_Results'],
            'CECT' => $data['CECT'],
            'CECT_Date' => $data['CECT_Date'],
            'CECT_Results' => $data['CECT_Results'],
        ]);


        return redirect('viewers/home');
    }

}
