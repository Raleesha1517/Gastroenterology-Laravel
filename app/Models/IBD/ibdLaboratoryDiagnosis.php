<?php

namespace App\Models\IBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibdLaboratoryDiagnosis extends Model
{
    use HasFactory;

    protected $table = 'ibdlaboratoryinvestigations';

    protected $fillable = [
        'ClinicalID',
        'Hemoglobin',
        'MeanCorpuscularVolume',
        'WhiteBloodCellCount',
        'PlateletCount',
        'ESR',
        'CRP',
        'Haematocrit',
        'Albumin',
        'SerumTotalBilirubin',
        'ALT',
        'AST',
        'GGT',
        'Urea',
        'FaecalCalprotectin',
        'FaecalLactoferrin',
        'StoolOccultBlood',
        'StoolCulture',
        'StoolCultureOrganism',
        'TuberculosisWorkup',
        'TuberculosisResult',
        'GeneticTesting',
        'GeneticTestingResults',
        'MRI',
        'MRI_Date',
        'MRI_Results',
        'CECT',
        'CECT_Date',
        'CECT_Results',
    ];
}
