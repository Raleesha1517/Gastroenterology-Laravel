<?php

namespace App\Models\IBD;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ibdImagingModel extends Model
{
    use HasFactory;
    protected $table = 'ibdimaging';
    protected $primaryKey = 'ImagingID';
    protected $fillable = [
        'ClinicalID',
        'UGIE_Date',
        'UGIE_Esophagus_endoscopy',
        'UGIE_Esophagus_histology',
        'UGIE_Stomach_endoscopy',
        'UGIE_Stomach_histology',
        'UGIE_Duodenum_endoscopy',
        'UGIE_Duodenum_histology',
        'UGIE_Remarks',
        'LGIE_Date',
        'LGIE_Terminal_Ileum_endoscopy',
        'LGIE_Terminal_Ileum_histology',
        'LGIE_Caecum_endoscopy',
        'LGIE_Caecum_histology',
        'LGIE_Ascending_Colon_endoscopy',
        'LGIE_Ascending_Colon_histology',
        'LGIE_Transverse_Colon_endoscopy',
        'LGIE_Transverse_Colon_histology',
        'LGIE_Descending_Colon_endoscopy',
        'LGIE_Descending_Colon_histology',
        'LGIE_Sigmoid_Colon_endoscopy',
        'LGIE_Sigmoid_Colon_histology',
        'LGIE_Rectum_endoscopy',
        'LGIE_Rectum_histology',
        'LGIE_Remarks'
    ];
}
