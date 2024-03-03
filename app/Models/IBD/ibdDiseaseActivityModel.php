<?php

namespace App\Models\IBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibdDiseaseActivityModel extends Model
{
    use HasFactory;

    protected $table = 'ibddiseaseactivity';

    protected $fillable = [
        'ClinicalID',
        'age_at_diagnosis',
        'disease_location_cd',
        'disease_behavior_cd',
        'disease_location_uc',
        'disease_behavior_uc',
        'perianal_disease_modifier',
        'growth',
        'PCDAI_total_score',
        'abdominal_pain',
        'patient_functioning',
        'stools_per_day',
        'weight',
        'height',
        'abdomen',
        'perianal_disease',
        'extraintestinal_manifestations',
        'hematocrit',
        'ESR',
        'albumin',
    ];
    
}
