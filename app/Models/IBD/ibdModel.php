<?php

namespace App\Models\IBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IBD\IbdPresentationModel;
use App\Models\IBD\ibdLaboratoryDiagnosis;

class ibdModel extends Model
{
    use HasFactory;

    protected $table = 'ibdpatientinformation';
    protected $primaryKey = 'ClinicalID';
    protected $fillable = [
        'Name', 'Gender', 'Ethnicity', 'DateOfBirth', 'Age',
        'Address', 'ContactNo', 'AgeOfSymptomOnset', 'DurationOfSymptoms',
        'DateOfDiagnosis', 'AgeOfDiagnosis', 'Diagnosis',
        'FamilyHistoryOfIBD', 'DegreeOfRelationIBD',
        'FamilyHistoryOfBowelCA', 'DegreeOfRelationBowelCA',
        'Consanguinity', 'DegreeOfConsanguinity'
    ];

    public function ibdPresentation()
    {
        return $this->hasOne(IbdPresentationModel::class, 'ClinicalID', 'ClinicalID');
    }

    public function ibdLaboratory()
    {
        return $this->hasOne(ibdLaboratoryDiagnosis::class, 'ClinicalID', 'ClinicalID');
    }
}

