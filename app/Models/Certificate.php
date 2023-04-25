<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificate_name',
        'description',
        'year',
        'file_name',
        'photo_url',
        'certificate_url'
    ];
}
