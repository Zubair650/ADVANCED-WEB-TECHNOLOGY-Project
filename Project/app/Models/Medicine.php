<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Disease;
use App\Models\Medicines_Diseases;

class Medicine extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'medicines';
    protected $fillable = [
        'name',
        'disease',
        'details',
        'price',
    ];
    public function medicines()
    {
        return $this-> hasMany(Disease::class,'id');
    }
    public function medicines_diseases()
    {
        return $this-> hasMany(Medicines_Diseases::class,'Medicines_id');
    }
}
