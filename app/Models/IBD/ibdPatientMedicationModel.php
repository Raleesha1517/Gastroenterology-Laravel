<?php

namespace App\Models\IBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibdPatientMedicationModel extends Model
{
    use HasFactory;
    protected $table = 'ibdpatientmedication';
    protected $fillable = [
        'ClinicalID',
        'MedicationUsed',
        'InitiationDate',
        'Dose',
        'MedicationOnDischarge',
        'PreExistingImmunosuppressants',
        'PreExistingMedications'
    ];
}
