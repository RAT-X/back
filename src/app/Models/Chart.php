<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
    use HasFactory;

     // charts_tableと紐づけ
     protected $fillable = [
        'project_title',
        'comment',
    ];
}
