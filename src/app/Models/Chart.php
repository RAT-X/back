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

    // Chartsは1つのuserに属するという処理
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
