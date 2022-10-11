<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AbsensiDetail extends Model
{
    use HasFactory;
    protected $table = 'indab_absensi_detail';
    protected $guarded = [];
    public $timestamps = false;
}
