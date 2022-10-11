<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Induksi extends Model
{
    use HasFactory;
    protected $table = 'indab_induksi';
    protected $guarded = [];
    public $timestamps=false;
}
