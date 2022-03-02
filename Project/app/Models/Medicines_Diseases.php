<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disease;
use App\Models\Medicine;

class Medicines_Diseases extends Model
{
    use HasFactory;
    public $table = 'medicines_diseases';
    public function medicine()
    {
        return $this-> belongsTo(Medicine::class,'Medicines_id');
    }
    public function disease()
    {
        return $this-> belongsTo(Disease::class,'Diseases_id');
    }
}
