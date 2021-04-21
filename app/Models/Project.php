<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    public $timestamps = true;

    

    protected $fillable = [
        'nip',
        'nama',
        'created_at',
        'alamat'
        
    ];
}
