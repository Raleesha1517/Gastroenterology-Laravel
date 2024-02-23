<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibdModel extends Model
{
    use HasFactory;

    protected $table = 'ibdpatientinformation';
    protected $fillable = [
        'Name', 'Gender', 'Ethnicity', 'DateOfBirth', 'Age',
        'Address', 'ContactNo', 'AgeOfSymptomOnset', 'DurationOfSymptoms',
        'DateOfDiagnosis', 'AgeOfDiagnosis', 'Diagnosis',
        'FamilyHistoryOfIBD', 'DegreeOfRelationIBD',
        'FamilyHistoryOfBowelCA', 'DegreeOfRelationBowelCA',
        'Consanguinity', 'DegreeOfConsanguinity'
    ];
    // static public function getRecords()
    // {
    //     $return =  self::select('raleesha.*');
    //     return $return;
    // }
}
