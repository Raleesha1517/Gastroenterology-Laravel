<?php

namespace App\Models\IBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IbdPresentationModel extends Model
{
    use HasFactory;

    protected $table = 'ibdpresentationdiagnosis';
    protected $fillable = [
        'ClinicalID',
        'Fever',
        'OralUlcers',
        'OralGranulomatosis',
        'Nausea',
        'MassiveGIBleeding',
        'Vomiting',
        'AbdominalMass',
        'Shock',
        'AbdominalPain',
        'Peritonitis',
        'MucoidStools',
        'Tenesmus',
        'ChronicDiarrhea',
        'JointPain',
        'BloodyDiarrhea',
        'PerianalPain',
        'MalaiseFatigue',
        'LossOfAppetite',
        'LossOfWeight',
        'FailureToThrive',
        'Others',
        'Pallor',
        'OralUlcersSign',
        'Clubbing',
        'OrofacialGranulomatosis',
        'Hepatomegaly',
        'AbdominalTenderness',
        'Splenomegaly',
        'InvoluntaryGuarding',
        'PerianalFissures',
        'IndolentPerianalFistula',
        'PerianalAbscess',
        'ActiveDrainingFistula',
        'PubertalDelay',
        'AsymptomaticPerianalTags',
        'InflamedPerianalTags',
        'MuscleWasting',
        'Arthritis',
        'ErythemaNodosum',
        'IritisUveitis',
        'PyodermaGangrenosum',
        'Oedema'
    ];
    
}
