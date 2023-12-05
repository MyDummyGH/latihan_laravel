<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MData extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $primary_key = 'id';
    protected $fillable = [
        'nama',
        'kelas',
        'hobi',
    ];
}
