<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
{
     // charts_tableと紐づけ
    //  protected $fillable = [
    //     'project_title',
    //     'comment',
    // ];

    // Chartsは1つのuserに属するという処理
    // public function user()
    // {
    //     return $this->belongsTo('App\Models\User');
    // }

    public function project()
    {
        return $this->belongsTo('App\Models\Project');
    }


}
