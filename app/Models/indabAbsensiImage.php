<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indabAbsensiImage extends Model
{
    use HasFactory;
    
    protected $table = 'indab_absensi_image';
    protected $guarded = [];
    public $timestamps = false;
}
