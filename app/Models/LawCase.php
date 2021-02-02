<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LawCase extends Model
{
    use HasFactory;


    protected $fillable = [
        'title', 'number', 'citation', 'court', 'law', 'judges', 'judgementdate', 'file_location'
    ];
}
